<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class MonitoringCalendarController extends Controller
{
    // public function getEvent()
    // {
    //     if (request()->ajax()) {
    //         $start = (!empty($_GET["start_time"])) ? ($_GET["start_time"]) : ('');
    //         $end = (!empty($_GET["end_time"])) ? ($_GET["end_time"]) : ('');
    //         $events = Schedule::whereDate('start_time', '>=', $start)->whereDate('end_time',   '<=', $end)
    //             ->get(['id', 'title', 'start_time', 'end_time']);
    //         return response()->json($events);
    //     }
    //     return view('monitoring');
    // }

    public function index()
    {
        $schedules = Schedule::all();
        return view('monitoring', compact('schedules'));
    }
}
