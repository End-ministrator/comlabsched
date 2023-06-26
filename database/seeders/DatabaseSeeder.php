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
            'firstname' => 'Department Head',
            'lastname' => 'Computer Studies',
            'email' => 'admin@tup.edu.ph',
            'password' => bcrypt('password'),
            'role' => 'Admin',
            'tag_id' => '894970192477',
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

        User::create([
            'firstname' => 'Darwin',
            'lastname' => 'Vargas',
            'email' => 'darwinvargas@tup.edu.ph',
            'password' => bcrypt('password'),
            'role' => 'Faculty',
            'tag_id' => '526429919834',
            'image' =>  '/images/usersample.jpg',
        ]);

        User::create([
            'firstname' => 'Cellenia',
            'lastname' => 'Texas',
            'email' => 'celleniatexas@tup.edu.ph',
            'password' => bcrypt('password'),
            'role' => 'Faculty',
            'tag_id' => '463184952208',
            'image' =>  '/images/usersample.jpg',
        ]);

        // Schedule::create([
        //     'title' => 'Schedule 1',
        //     'date' => '2023-06-14',
        //     'start_time' => '12:00:00',
        //     'end_time' => '13:00:00',
        //     'user_id' => 2,
        //     'laboratory' => 'lab1',
        //     'school_year' => '2022-2023',
        //     'semester' => '2nd Semester',
        //     'recurrence' => 'none',
        //     'recurrence_value' => 0,
        //     'created_at' => Carbon::now()->setTimezone('Asia/Manila'),
        //     'updated_at' => Carbon::now()->setTimezone('Asia/Manila'),
        // ]);

        // Schedule::create([
        //     'title' => 'Schedule 2',
        //     'date' => '2023-06-14',
        //     'start_time' => '12:00:00',
        //     'end_time' => '13:00:00',
        //     'user_id'=>3,
        //     'laboratory'=>'lab2',
        //     'school_year' => '2022-2023',
        //     'semester' => '2nd Semester',
        //     'recurrence' => 'none',
        //     'recurrence_value' => 0,
        //     'created_at'=> Carbon::now()->setTimezone('Asia/Manila'),
        //     'updated_at' => Carbon::now()->setTimezone('Asia/Manila'),
        // ]);

        // Schedule::create([
        //     'title' => 'Schedule 3',
        //     'date' => '2023-06-15',
        //     'start_time' => '12:00:00',
        //     'end_time' => '12:30:00',
        //     'user_id' => 3,
        //     'laboratory' => 'lab1',
        //     'school_year' => '2022-2023',
        //     'semester' => '2nd Semester',
        //     'recurrence' => 'none',
        //     'recurrence_value' => 0,
        //     'created_at' => Carbon::now()->setTimezone('Asia/Manila'),
        //     'updated_at' => Carbon::now()->setTimezone('Asia/Manila'),
        // ]);

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
        //     'created_at'=> Carbon::now()->setTimezone('Asia/Manila');,
        //     'updated_at' => Carbon::now()->setTimezone('Asia/Manila');,
        //     'school_year' => '2022-2023',
        //     'semester' => '1st',
        // ]);

        // Schedule::create([
        //     'start_time' => '00:00',
        //     'end_time' => '23:59',
        //     'days'=> 'Friday',
        //     'faculty_id'=>2,
        //     'laboratory'=>'lab2',
        //     'created_at'=> Carbon::now()->setTimezone('Asia/Manila');,
        //     'updated_at' => Carbon::now()->setTimezone('Asia/Manila');,
        //     'school_year' => '2022-2023',
        //     'semester' => '1st',
        // ]);

        // Schedule::create([
        //     'start_time' => '00:00',
        //     'end_time' => '23:59',
        //     'days'=> 'Friday',
        //     'faculty_id'=>1,
        //     'laboratory'=>'lab2',
        //     'created_at'=> Carbon::now()->setTimezone('Asia/Manila');,
        //     'updated_at' => Carbon::now()->setTimezone('Asia/Manila');,
        //     'school_year' => '2022-2023',
        //     'semester' => '1st',
        // ]);

        Log::create([
            'rfid' => '1093887689476',
            'access_granted' => false,
            'created_at' => Carbon::now(),
        ]);

        // Log::create([
        //     'rfid' => '1093887689476',
        //     'status' => 'granted',
        //     'created_at' => Carbon::now(),

        // ]);

        Log::create([
            'rfid' => '1093887689476',
            'access_granted' => true,
            'created_at' => Carbon::now()->setTimezone('Asia/Manila'),

        ]);

        // Log::create([
        //     'rfid' => '1093887689476',
        //     'status' => 'granted',
        //     'created_at' => Carbon::now()->setTimezone('Asia/Manila'),

        // ]);
    }
}
