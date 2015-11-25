<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        App\Applicant::truncate();
        App\AcademicYear::truncate();

        $academic_years = factory('App\AcademicYear', 5)->create();

        $applicants = factory('App\Applicant', 10)->create()->each(function($applicant) use ($academic_years){
            $academic_years->random()->applicants()->save($applicant);
        }); 

        Model::reguard();
    }
}
