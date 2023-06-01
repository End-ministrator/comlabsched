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
            <div class="flex px-7 w-full ">
                <div class="h-full w-full   flex flex-col rounded-none dark:bg-gray-800 bg-smokeywhite ">
                    <div class="grid gap-7 grid-flow-row w-full sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 mt-4  ">

                        
                        <div class="flex w-full h-40 rounded-md shadow-sm shadow-black  my-1 bg-cyan-500  flex-col ">
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

                        <div class="flex  w-full h-40 rounded-md shadow-sm shadow-black my-1 bg-indigo-500  flex-col ">
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
                    <div class="flex  bg-white my-5 justify-center items-center rounded-md shadow-black shadow-sm">
                        <canvas id="myChart" class="relative w-full h-auto m-2"></canvas>
                    </div> 
                    
                </div>

            </div>       

        
    </div>

</div>

<script>



        ds.classList.add('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        us.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        lg.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        mn.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        sc.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');
        st.classList.remove('dark:bg-blue-800','bg-blue-800','shadow-inner','shadow-blue-800');

 
    // chart

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            datasets: [
                {
                    label: 'Laboratory 1',
                    data: [3, 5, 2, 4, 3],
                    backgroundColor: '#06b6d4',
                    borderWidth: 1
                },
                {
                    label: 'Laboratory 2 ',
                    data: [4, 3, 5, 1, 2],
                    backgroundColor: '#6366f1',
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





@endsection

