<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_leaders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('tilte');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('bio');
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
        Schema::dropIfExists('faculty_leaders');
    }
}
