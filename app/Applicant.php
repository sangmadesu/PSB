<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
	
	public function user()    
	{
		return $this->belongsTo('App\User');
	}

	public function academicYear()
	{
		return $this->belongsTo('App\AcademicYear');
	}
}
