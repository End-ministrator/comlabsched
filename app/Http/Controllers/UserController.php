<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
        $schedules = Schedule::where('faculty_id', auth()->user()->id)->get();
        return view('dashboard', compact('schedules'));
    }
}
