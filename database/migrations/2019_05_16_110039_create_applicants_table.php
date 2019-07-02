<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname')->nullable();
            $table->string('surname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('disabled')->nullable();
            $table->string('disability_specification')->nullable();
            $table->string('dob')->nullable();
            $table->string('id_number')->nullable();
            $table->string('telephone')->nullable();
            $table->string('gender')->nullable(); 
            $table->string('email')->nullable();
            $table->string('marital_status')->nullable(); 
            $table->string('country')->nullable(); 
            $table->string('current_address')->nullable(); 
            $table->string('religion')->nullable();
            $table->string('clergy_type')->nullable();
            $table->string('religious_order')->nullable();
            $table->string('high_school')->nullable();
            $table->string('school_address')->nullable();
            $table->string('when_started_highschool')->nullable();
            $table->string('when_ended_highschool')->nullable();
            $table->string('college')->nullable();
            $table->string('college_address')->nullable();
            $table->string('when_started_college')->nullable();
            $table->string('when_ended_college')->nullable();
            $table->string('high_school2')->nullable();
            $table->string('school_address2')->nullable();
            $table->string('when_started_highschool2')->nullable();
            $table->string('when_ended_highschool2')->nullable();
            $table->string('college2')->nullable();
            $table->string('college_address2')->nullable();
            $table->string('when_started_college2')->nullable();
            $table->string('when_ended_college2')->nullable();
            $table->string('high_school3')->nullable();
            $table->string('school_address3')->nullable();
            $table->string('when_started_highschool3')->nullable();
            $table->string('when_ended_highschool3')->nullable();
            $table->string('college3')->nullable();
            $table->string('college_address3')->nullable();
            $table->string('when_started_college3')->nullable();
            $table->string('when_ended_college3')->nullable();
            $table->string('when_to_start')->nullable();
            $table->string('cuea_before')->nullable();
            $table->string('previous_reg_number')->nullable();
            $table->string('mode_of_study')->nullable(); 
            $table->string('campus')->nullable();  
            $table->string('level')->nullable();      
            $table->string('first_choice')->nullable();
            $table->string('second_choice')->nullable();
            $table->string('third_choice')->nullable();
            $table->string('sponsor')->nullable();
            $table->string('sponsor_name')->nullable();
            $table->string('sponsor_email')->nullable();
            $table->string('sponsor_address')->nullable();
            $table->string('sponsor_telephone')->nullable();
            $table->string('next_of_kin')->nullable();
            $table->string('next_of_kin_address')->nullable();
            $table->string('next_of_kin_telephone')->nullable();
            $table->string('next_of_kin_email')->nullable();
            $table->string('sources')->nullable();
            $table->string('other_sources')->nullable();

            $table->string('passport_picture')->nullable();

            $table->string('id_number_file')->nullable();
            $table->string('college_file')->nullable();
            $table->string('high_school_file')->nullable();
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
        Schema::dropIfExists('applicants')->nullable();
    }
}
