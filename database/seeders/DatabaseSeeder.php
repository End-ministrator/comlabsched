<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Log;
use App\Models\User;
use App\Models\Schedule;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'admin@tup.edu.ph',
            'password' => bcrypt('password'),
            'role' => 'Admin',
            'tag_id' => '1234567890',
            'image' =>  '/images/usersample.jpg'
        ]);

        User::create([
            'firstname' => 'Jane',
            'lastname' => 'Doe',
            'email' => 'faculty@tup.edu.ph',
            'password' => bcrypt('password'),
            'role' => 'Faculty',
            'tag_id' => '1093887689476',
            'image' =>  '/images/usersample.jpg',
        ]);

        Schedule::create([
            'title' => 'Schedule 1',
            'date' => '2023-06-5',
            'start_time' => '08:00:00',
            'end_time' => '23:00:00',
            'user_id'=>1,
            'laboratory'=>'lab1',
            'school_year' => '2022-2023',
            'semester' => '2nd Semester',
            'recurrence' => 'daily',
            'recurrence_value' => 2,
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // template for schedules table
        // $table->id('id');
        //     $table->string('name');
        //     $table->datetime('start_time');
        //     $table->datetime('end_time');
        //     $table->string('days');
        //     $table->foreign('user_id')->references('id')->on('users'); // foreign key for user_id to identify the user who owns the schedule
        //     $table->string('laboratory');
        //     $table->string('school_year');
        //     $table->string('semester');
        //     $table->string('recurrence');
        //     $table->integer('recurrence_value')->nullable();
        //     $table->timestamps();
        //     $table->softDeletes();

        // old schedules template
        // Schedule::create([
        //     'start_time' => '00:00',
        //     'end_time' => '23:59',
        //     'days'=> 'Tuesday',
        //     'faculty_id'=>1,
        //     'laboratory'=>'lab1',
        //     'created_at'=> Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'school_year' => '2022-2023',
        //     'semester' => '1st',
        // ]);

        // Schedule::create([
        //     'start_time' => '00:00',
        //     'end_time' => '23:59',
        //     'days'=> 'Friday',
        //     'faculty_id'=>2,
        //     'laboratory'=>'lab2',
        //     'created_at'=> Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'school_year' => '2022-2023',
        //     'semester' => '1st',
        // ]);

        // Schedule::create([
        //     'start_time' => '00:00',
        //     'end_time' => '23:59',
        //     'days'=> 'Friday',
        //     'faculty_id'=>1,
        //     'laboratory'=>'lab2',
        //     'created_at'=> Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //     'school_year' => '2022-2023',
        //     'semester' => '1st',
        // ]);

        Log::create([
            'rfid' => '2345678901',
            'status' => 'granted',
        ]);

        Log::create([
            'rfid' => '2345678901',
            'status' => 'granted',
        ]);

        Log::create([
            'rfid' => '2345678901',
            'status' => 'denied',
        ]);

        Log::create([
            'rfid' => '1234567890',
            'status' => 'granted',
        ]);
    }
}
