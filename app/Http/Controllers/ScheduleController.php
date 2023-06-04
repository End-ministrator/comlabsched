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
        // abort if user is not admin
        abort_if(!auth()->user()->role == 'admin', 403, 'You are not authorized to access this page.');

        if(auth()->user()->role == 'admin'){
            $schedules = Schedule::all();
            return view('schedule', compact('schedules'));
        }
        else if(auth()->user()->role == 'faculty'){
            $schedules = Schedule::where('faculty_id','=',auth()->user()->id)->get();
            return view('schedule', compact('schedules'));
        }
        else{
            $schedules = Schedule::where('faculty_id','=',auth()->user()->id)->get();
            return view('schedule', compact('schedules'));
        }
        // $schedules = Schedule::with(['user'])->get();

        // return view('admin.schedules.index', compact('schedules'));
    }

    public function create()
    {
        abort_if(!auth()->user()->role == 'admin', 403, 'You are not authorized to access this page.');
        // put all users in the create schedule form dropdown
        $users = User::pluck('name', 'id');
        return view('admin.schedules.create', compact('users'));
    }

    public function store($request)
    {
        $schedule = Schedule::create($request->all());

        return redirect()->route('admin.schedules.index');
    }

    public function edit(Schedule $schedule)
    {
        abort_if(!auth()->user()->role == 'admin', 403, 'You are not authorized to access this page.');

        // put all users in the create schedule form dropdown
        $users = User::pluck('name', 'id');

        $schedule->load('user');

        return view('admin.schedules.edit', compact('users'));
    }

    public function update($request, Schedule $schedule)
    {
        $schedule->update($request->all());

        return redirect()->route('admin.schedules.index');
    }

    public function delete(Schedule $schedule)
    {
        abort_if(!auth()->user()->role == 'admin', 403, 'You are not authorized to access this page.');

        $schedule->delete();

        return redirect()->route('admin.schedules.index');
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
    public function schedule(){
        $data = Schedule::all();
        return view('schedule', compact('data'));
    }

    // public function addSchedule(){
    //     return view('addSchedule');
    // }
    
    // public function editSchedule ($id){
    //     $sch = Schedule::where('id','=',$id)->first();
    //     return view('editSchedule',compact('sch'));
    // }

    // public function updateSchedule(Request $request){
    //     $request->validate([
    //         'start_time'=> 'required',
    //         'end_time'=>'required',
    //         'days'=>'required',
    //         'faculty_id'=>'required',
    //         'laboratory'=>'required',
    //     ]);
    //     $id = $request->id;
    //     $start_time = $request->start_time;
    //     $end_time = $request->end_time;
    //     $days = $request->days;
    //     $faculty_id = $request->faculty_id;
    //     $laboratory = $request->laboratory;

    //     Schedule::where('id','=',$id)->update([
    //         'start_time'=>$start_time,
    //         'end_time'=>$end_time,
    //         'days'=>$days,
    //         'faculty_id'=>$faculty_id,
    //         'laboratory'=>$laboratory
    //     ]);
    //     return redirect()->back()->with('success','Schedule updated successfully!');
    // }

    // public function deleteSchedule($id){
    //     Schedule::where('id','=',$id)->delete();
    //     return redirect()->back()->with('success','Schedule deleted successfully!');
    // }

}
