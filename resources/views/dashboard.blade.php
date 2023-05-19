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
            <div class="h-full w-full bg-white flex flex-col rounded-none ">
                <div class="grid grid-flow-row w-full sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 mt-4  ">

                    
                    <div class="flex w-95p h-40 rounded-md shadow-sm shadow-black ml-4  my-1 bg-cyan  flex-col ">
                        <span class="font-semibold text-xl mx-2 my-1">Laboratory 1</span>
                        <div class="flex justify-between">
                            <div class="my-3">
                                <span class="font-semibold text-md mx-2 my-1">Vacant</span>
                            </div>
                            
                            <div class="">
                                <span class="font-semibold text-md mx-2 my-1">Upcoming Schedule</span>
                                <div class="flex w-1/2 h-16 mx-2 my-2 border-none">
                                <!-- upcoming sched here -->
                                <span>SCHED HERE</span>
                                </div>
                            </div>
                            
                        </div>


                    
                    </div>

                    <div class="flex  w-95p h-40 rounded-md shadow-sm shadow-black ml-4 my-1 bg-bluee  flex-col ">
                        <span class="font-semibold text-xl mx-2 my-1">Laboratory 2</span>
                        <div class="flex justify-between">
                            <div class="my-3">
                                <span class="font-semibold text-md mx-2 my-1">Occupied</span>
                            </div>
                            
                            <div class="">
                                <span class="font-semibold text-md mx-2 my-1">Upcoming Schedule</span>
                                <div class="flex w-1/2 h-16 mx-2 my-2 border-none">
                                    <!-- upcoming sched here -->
                                    <span>SCHED HERE</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                        
                    
                </div> 
                <div class="flex  bg-white mx-3 mt-5 justify-center items-center rounded-md shadow-black shadow-sm">
                    <canvas id="myChart" class="relative w-full h-auto m-2"></canvas>
                </div> 
                
            </div>

                

    
    </div>

</div>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            datasets: [
                {
                    label: 'Laboratory 1',
                    data: [3, 5, 2, 4, 3],
                    backgroundColor: '#ec4899',
                    borderWidth: 1
                },
                {
                    label: 'Laboratory 2 ',
                    data: [4, 3, 5, 1, 2],
                    backgroundColor: '#eab308',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });





</script>





    
<div class="hidden ">
    <livewire:schedule-table theme="tailwind"/> 
        {{-- @foreach ($schedules as $schedule)
            <p>Time: {{$schedule->start_time}} - {{$schedule->end_time}}</p>
            <p>Day: {{$schedule->days}}</p>
            <p>Faculty: {{$schedule->faculty_id}}</p> 
            <p>Room: {{$schedule->laboratory}}</p>   
        @endforeach --}} 
        
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
                                    <td><button onclick='Livewire.emit("openModal", "edit-schedule", {{ json_encode([$sch->id]) }})'>Edit</button> | <a href="{{ route('schedule.delete', ['id' => $sch->id]) }}">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>      
    
</div>
    
@endsection

