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
            $table->string('firstname');
            $table->string('surname');
            $table->string('lastname');
            $table->string('disabled');
            $table->string('disability_specification');
            $table->string('dob');
            $table->string('id_number');
            $table->string('telephone');
            $table->string('gender'); 
            $table->string('email');
            $table->string('marital_status'); 
            $table->string('country'); 
            $table->string('current_address'); 
            $table->string('religion');
            $table->string('clergy_type');
            $table->string('high_school');
            $table->string('school_address');
            $table->string('when_started_highschool');
            $table->string('when_ended_highschool');
            $table->string('colledge');
            $table->string('colledge_address');
            $table->string('when_started_colledge');
            $table->string('when_ended_colledge');
            $table->string('programme_type');
            $table->string('when_to_start');
            $table->string('cuea_before');
            $table->string('reg_no');           
            $table->string('first_choice');
            $table->string('second_choice');
            $table->string('third_choice');
            $table->string('sponsor');
            $table->string('sponsor_name');
            $table->string('sponsor_email');
            $table->string('sponsor_address');
            $table->string('sponsor_telephone');
            $table->string('next_of_kin');
            $table->string('next_of_kin_address');
            $table->string('next_of_kin_telephone');
            $table->string('next_of_kin_email');
            $table->string('source');
            $table->string('other_sources');
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
        Schema::dropIfExists('applicants');
    }
}
