<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AcademicYear;
use App\Role;
use App\Applicant;
use App\User;

class AdminPageController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function admin()
    {
    	$applicants = Applicant::all();
    	// dd($applicants);
    	$jml = $applicants->count();
        return view('admin.admin', compact('applicants'));
    }

    public function adminShow()
    {

        $applicants = Applicant::all();

        return view('admin.admin-show', compact('applicants'));
    }

    public function staff()
    {
    	return view('admin.staff');
    }

    public function applicant()
    {
    	return view('admin.applicant');
    }
}
