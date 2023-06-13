<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Exports\MonitoringExport;
use Maatwebsite\Excel\Facades\Excel;

class ScheduleController extends Controller
{

    protected $data;

    public function __construct()
    {
        $this->data = Schedule::all();
    }

    public function show(Schedule $schedule)
    {
        abort_if(!auth()->user()->role == 'admin', 403, 'You are not authorized to access this page.');

        $schedule->load('user');

        return view('admin.schedules.show', compact('schedule'));
    }

    public function dashboard()
    {
        $data = Schedule::all();
        return view('dashboard', compact('data'));
    }


    public function schedule()
    {

        // $schedules = Schedule::all();
        $schedules = Schedule::all()->toArray();

        return view('schedulecrud.schedule')->with(compact('schedules'));
    }
    public function export()
    {
    
        return Excel::download(new MonitoringExport, 'YourSchedule.xlsx');
    }
}
