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
    <div class="flex px-7 w-full h-screen">

    
        <div class="flex flex-col w-full h-full items-center bg-smokeywhite dark:bg-gray-800">
            <div class="flex flex-col bg-white dark:bg-gray-700 rounded-md my-7 p-4  w-full h-full items-center justify-center">
                <div id='calendar' class="w-full p-4" style="max-width: 1750px; max-height: 625px;">
                
                </div>
                <div class="w-full flex justify-end space-x-6 pr-4">
                    <button id="calendarCancel" class="w-20 h-9 text-lg border border-blue-500 rounded-lg">Cancel</button>
                    <button id="calendarSave" class=" text-white !important w-20 h-9 text-lg bg-blue-700 rounded-lg">Save</button>
                </div>
            </div>
        </div>
    </div>
        <!-- content end -->
      
    </div>

</div>

<script>
    // navbar indicator style
        ds.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        us.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        lg.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        mn.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        sc.classList.add('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        st.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
</script>









   



        
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
                    <button onclick="Livewire.emit('openModal', 'add-schedule')" class="z-50 bg-red-500 inset-y-28 w-96 h-96">Add Schedule</button>
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
       --}}
        <!-- content end -->
 







   
@endsection