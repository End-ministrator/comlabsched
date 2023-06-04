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
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'Admin',
            'tag_id' => '1234567890',
            // 'permissions' => '{"view_schedules": true, "create_schedules": true, "edit_schedules": true, "delete_schedules": true, "view_users": true, "create_users": true, "edit_users": true, "delete_users": true, "view_logs": true}'
        ]);

        User::create([
            'firstname' => 'Jane',
            'lastname' => 'Doe',
            'email' => 'faculty@example.com',
            'password' => bcrypt('password'),
            'role' => 'Faculty',
            'tag_id' => '2345678901',
            // 'permissions' => '{"view_schedules": true, "create_schedules": true, "edit_schedules": true, "delete_schedules": true, "view_users": true, "create_users": true, "edit_users": true, "delete_users": true, "view_logs": true}'
        ]);

        Schedule::create([
            'start_time' => '00:00',
            'end_time' => '23:59',
            'days'=> 'Monday',
            'faculty_id'=>1,
            'laboratory'=>'lab1',
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now(),
            'school_year' => '2022-2023',
            'semester' => '1st',
        ]);

        Schedule::create([
            'start_time' => '00:00',
            'end_time' => '23:59',
            'days'=> 'Tuesday',
            'faculty_id'=>1,
            'laboratory'=>'lab1',
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now(),
            'school_year' => '2022-2023',
            'semester' => '1st',
        ]);

        Schedule::create([
            'start_time' => '00:00',
            'end_time' => '23:59',
            'days'=> 'Friday',
            'faculty_id'=>2,
            'laboratory'=>'lab2',
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now(),
            'school_year' => '2022-2023',
            'semester' => '1st',
        ]);

        Schedule::create([
            'start_time' => '00:00',
            'end_time' => '23:59',
            'days'=> 'Friday',
            'faculty_id'=>1,
            'laboratory'=>'lab2',
            'created_at'=> Carbon::now(),
            'updated_at' => Carbon::now(),
            'school_year' => '2022-2023',
            'semester' => '1st',
        ]);

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
