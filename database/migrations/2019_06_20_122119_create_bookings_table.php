<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullName'); 
            $table->string('phoneNumber'); 
            $table->string('email'); 
            $table->string('organization'); 
            $table->string('natureOfTheEvent');
            $table->string('facilityRequired');
            $table->dateTime('dateOfTheEvent'); 
            $table->string('numberOfPeople'); 
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
        Schema::dropIfExists('bookings');
    }
}
