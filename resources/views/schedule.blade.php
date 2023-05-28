@extends('layouts.main')

@section('title', 'Department Head | Dashboard')

@section('content')

<div class="flex flex-row">

    <div class=" flex">
        <x-nav-bar/>
        <!--  -->
    </div>

    <div class=" lg:ml-x sm:ml-xsm  md:ml-xmd ml-xsm  flex-col w-full ">
        <x-topbar/>
        <!-- main content goes here -->
        {{--
        <div class=" bg-black">
            <livewire:schedule-table theme="tailwind"/> 
                {{-- @foreach ($schedules as $schedule)
                    <p>Time: {{$schedule->start_time}} - {{$schedule->end_time}}</p>
                    <p>Day: {{$schedule->days}}</p>
                    <p>Faculty: {{$schedule->faculty_id}}</p> 
                    <p>Room: {{$schedule->laboratory}}</p>   
                @endforeach --}}
                {{--
                <!-- Outside of any Livewire component -->
                @if(auth()->user()->role == 'department head')
                    <button onclick="Livewire.emit('openModal', 'add-schedule')" class="z-50 inset-y-28 w-96 h-96">Add Schedule</button>
                @endif
                @if(Session::has('success'))
                    <div role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif 
                <div class="flex justify-center">
                    <div class=" flex w-full py-5 h-screen items-center justify-center">
                        <div class=" w-full flex justify-center"> 
                            <table class="w-90 border-spacing-9 border-separate border table-fixed bg-zinc-500">
                                <thead>
                                    <tr>
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
                                            <td><button onclick='Livewire.emit("openModal", "edit-schedule", {{ json_encode([$sch->id]) }})'>Edit</button> | <a href="{{ route('schedule.delete', ['id' => $sch->id]) }}">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>      
     
        </div>

        <!-- content end -->
        --}}

    </div>

</div>

<div id='calendar' style="max-width: 1750px; max-height: 800px; margin: 40px auto; padding-left: 200px"></div>















   
@endsection