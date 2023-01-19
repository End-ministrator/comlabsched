@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    {{-- @foreach ($schedules as $schedule)
        <p>Time: {{$schedule->start_time}} - {{$schedule->end_time}}</p>
        <p>Day: {{$schedule->days}}</p>
        <p>Faculty: {{$schedule->faculty_id}}</p> 
        <p>Room: {{$schedule->laboratory}}</p>   
    @endforeach --}}
    
    <a href="{{ url('addSchedule') }}">Add Schedule</a>
    @if(Session::has('success'))
<div role="alert">
    {{Session::get('success')}}
</div>
@endif
<div class="flex justify-center mb-60">
    <div class=" flex w-full mt-60  mx-80 h-45 py-5 rounded-md ">
        <div class=" w-full flex justify-center"> 
            <table class=" w-90 border-spacing-9 border-separate border table-fixed bg-zinc-500">
                <thead>
                    <tr >
                        <th>Time</th>
                        <th>Day</th>
                        <th>Faculty</th>
                        <th>Laboratory</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $sch)
                        <tr>
                            <td>{{$sch->start_time}} - {{$sch->end_time}}</td>
                            <td>{{$sch->days}}</td>
                            <td>{{$sch->faculty_id}}</td>
                            <td>{{$sch->laboratory}}</td>
                            <td><a href="{{url('editSchedule/'.$sch->id)}}">Edit</a> | <a href="{{url('deleteSchedule/'.$sch->id)}}">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>





   
    
@endsection