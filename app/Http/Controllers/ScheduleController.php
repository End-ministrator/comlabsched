<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function dashboard(){
        $data = Schedule::all();
        return view('dashboard', compact('data'));
    }

    public function addSchedule(){
        return view('addSchedule');
    }
    
    public function editSchedule ($id){
        $sch = Schedule::where('id','=',$id)->first();
        return view('editSchedule',compact('sch'));
    }

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
