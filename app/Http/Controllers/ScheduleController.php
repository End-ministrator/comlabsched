<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    protected $data;

    public function __construct()
    {
        $this->data = Schedule::all();
    }
    public function index (){
   
    }

    public function show(Schedule $schedule)
    {
        abort_if(!auth()->user()->role == 'admin', 403, 'You are not authorized to access this page.');

        $schedule->load('user');

        return view('admin.schedules.show', compact('schedule'));
    }

    public function dashboard(){
        $data = Schedule::all();
        return view('dashboard', compact('data'));
    }


    public function schedule()
    {

        // $schedules = Schedule::all();
        $schedules = Schedule::all()->toArray();
      
        return view('schedulecrud.schedule')->with(compact('schedules'));
    }

    // public function addSchedule(){
    //     return view('addSchedule');
    // }
    
    // public function editSchedule ($id){
    //     $sch = Schedule::where('id','=',$id)->first();
    //     return view('editSchedule',compact('sch'));
    // }

    public function updateSchedule(Request $request){
        $request->validate([
            'start_time'=> 'required',
            'end_time'=>'required',
            'days'=>'required',
            'faculty_id'=>'required',
            'laboratory'=>'required',
        ]);
        $id = $request->id;
        $start_time = $request->start_time;
        $end_time = $request->end_time;
        $days = $request->days;
        $faculty_id = $request->faculty_id;
        $laboratory = $request->laboratory;

        Schedule::where('id','=',$id)->update([
            'start_time'=>$start_time,
            'end_time'=>$end_time,
            'days'=>$days,
            'faculty_id'=>$faculty_id,
            'laboratory'=>$laboratory
        ]);
        return redirect()->back()->with('success','Schedule updated successfully!');
    }

    public function deleteSchedule($id){
        Schedule::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Schedule deleted successfully!');
    }

}
