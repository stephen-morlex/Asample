<?php

use Illuminate\Database\Seeder;
use App\Program;
use App\Faculty;
use App\Section;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Section::class,4)->create();
        factory(Faculty::class,20)->create();
        factory(Program::class,10)->create();


    }
}
