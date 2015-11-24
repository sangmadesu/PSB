<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    protected $table = 'academic_year';

    public function applicant()
    {
    	return $this->hasMany('App\Applicant', 'academic_year_id');
    }
}
