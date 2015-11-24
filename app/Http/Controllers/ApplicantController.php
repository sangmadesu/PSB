<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
// Access Model
use App\Applicant;
use App\User;
use App\AcademicYear;
use App\Role;

class ApplicantController extends Controller
{
    public function getRegister()
    {
        return view('psb.register');
    }

    public function postRegister(Request $request)
    {
        // dd($request->all());
        // $this->validate($request, [
        //     "name" => "required | min:3 | max:30",
        //     "place_of_birth" => "required | min:3",
        //     "date_of_birth" => "required | min:5 | max:20",
        //     "address" => "required | min:5 | max:30",
        //     "middle_school_name" => "required | min:5 | max:30",
        //     "middle_school_address" => "required | min:5 | max:30",
        //     "date_of_graduate" => "required | min:5 | max:20",
        //     "math_score" => "required | min:1 | max:6 | numeric",
        //     "indonesian_score" => "required | min:1 | max:6 | numeric",
        //     "english_score" => "required | min:1 | max:6 | numeric",
        //     "science_score" => "required | min:1 | max:6 | numeric",
        //     "average_score" => "required | min:1 | max:6 | numeric",
        //     "handphone_number" => "required | min:9 | max:20 | numeric",
        //     "parent_name" => "required | min:5 | max:25",
        //     "document_graduate" => "required | mimes:jpg,jpeg,png,pdf",
        //     "email" => "required | email",
        //     "password" => "required"
        //   ]);

          
          // Insert To Applicant Table
          $applicant = new Applicant();
          // $applicant->name = $request->get('name');
          $applicant->name = $request->name;
          $applicant->place_of_birth = $request->place_of_birth;
          $applicant->date_of_birth = $request->date_of_birth;
          $applicant->address = $request->address;
          $applicant->middle_school_name = $request->middle_school_name;
          $applicant->middle_school_address = $request->middle_school_address;
          $applicant->date_of_graduate = $request->date_of_graduate;
          $applicant->math_score = $request->math_score;
          $applicant->indonesian_score = $request->indonesian_score;
          $applicant->english_score = $request->english_score;
          $applicant->science_score = $request->science_score;
          $applicant->average_score = $request->average_score;
          $applicant->handphone_number = $request->handphone_number;
          $applicant->parent_name = $request->parent_name;
          $applicant->save();

          // Insert Academic Year Id To Applicant Table
          $academic_year = AcademicYear::all()->last(); // collection
          $applicant->academic_year_id = $academic_year->id;
          $applicant->save();
           
          // Find Number Of Register & Save To Applicant Table
          // $academic_year->year nilainya misal 2015/2016
          $years = explode('/', $academic_year->year);
          $year_1 = $years[0]; // 2015
          $year_2 = $years[1]; // 2016
          $year_1 = substr($year_1, 2, 2); // 15
          $year_2 = substr($year_2, 2, 2); // 16
          $id = str_pad($applicant->id, 4, '0', STR_PAD_LEFT); // 0001
          $reg_number = $year_1 . $year_2 . '-' . $id; //1516-0001
          $applicant->reg_number = $reg_number;

          //Upload File Process
          $file = $request->file('document_graduate');
          $dir = 'files';
          $path = public_path($dir);
          $fileName = $reg_number.'.'.$file->getClientOriginalExtension();
          $file->move($path, $fileName);
          $applicant->document_graduate = $dir.'/'.$fileName;
          // Save To Applicant Table
          $applicant->save();

          // Insert Email & Password To User Table
          $user = new User;
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = bcrypt($request->password);
          // dd($applicant, $user);
          $user->save();

          // Save User Id To Applicant Table
          $applicant->user_id = $user->id;
          $applicant->save();
          
          // Find Role Id & Save To User Table
          // $role = new Role;
          $role = Role::where('name', 'applicant')->get()->first();
          // dd($role->name);
          $user->role_id = $role->id;
          $user->save();

          // Send Email To Applicant
          $data = array(
            'reg_number' => $reg_number,
            'nama' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            );
          
          // dd($user->email);
          Mail::send('emails.register', $data, function($message) use ($request) {
            $message->from('handry19@gmail.com', 'Terima Kasih Hero');
            // dd($request->email);
            $message->to($request->email)->subject('Terima Kasih Sudah Mau Bergabung Bersama Kami');
          });

          // Redirect To Prev Page
          return redirect('/calon-siswa/daftar');
    }

    public function showApplicants()
    {
      $applicants = Applicant::all();
      // dd($applicants);
      // $applicants = Applicant::all()->first();
      // $users = User::all()->first();
      // dd($users->address);
      // dd($applicants, $users, $academic_year);
      $no = 1;
      return view('psb.show', compact('applicants'));
    }
    

}
