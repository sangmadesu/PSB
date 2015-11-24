<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('academic_year_id');
            $table->string('reg_number');
            $table->string('name');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->text('address');
            $table->text('middle_school_name');
            $table->text('middle_school_address');
            $table->date('date_of_graduate');
            $table->float('math_score');
            $table->float('english_score');
            $table->float('indonesian_score');
            $table->float('science_score');
            $table->float('average_score');
            $table->string('handphone_number');
            $table->string('parent_name');
            $table->string('document_graduate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('applicants');
    }
}
