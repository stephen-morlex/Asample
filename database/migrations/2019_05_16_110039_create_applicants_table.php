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
            $table->string('fullName'); 
            $table->string('email'); 
            $table->integer('countryCode'); 
            $table->integer('phoneNumber'); 
            $table->string('faculty');
            $table->string('program');
            $table->string('modeOfStudy');
            $table->string('phd');
            $table->string('doctorate');
            $table->string('masters');
            $table->string('degree');
            $table->string('diploma');
            $table->string('certificate');
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
