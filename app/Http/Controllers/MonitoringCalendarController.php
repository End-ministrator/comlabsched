<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class MonitoringCalendarController extends Controller
{
    

    public function index()
    {
        $schedules = Schedule::all();
        return view('monitoring', compact('schedules'));
    }
}
