<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcceptedApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accepted_applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('academic_year_id');
            $table->integer('applicant_id');
            $table->string('predicat');
            $table->float('total_score');
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
        Schema::drop('accepted_applicants');
    }
}
