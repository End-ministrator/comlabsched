@extends('layouts.main')

@section('title', 'Department Head | Dashboard')

@section('content')
<div class="flex flex-row">

    <div class=" flex">
        <x-nav-bar/>
        <!--  -->
    </div>

    <div class=" lg:ml-x sm:ml-xsm  md:ml-xmd ml-xsm  flex-col w-full h-screen  ">
        <x-topbar/>
        <!-- main content goes here -->
        <div class="grid  w-full h-screen items-center ">
            <div class="absolute  flex justify-self-start translate-x-40 h-5/6 w-20 bg-yellow-300 border z-50  justify-evenly items-center flex-col  space-y-20">
                <a href="" class="my-2 text-2xl"><i class="fa-solid fa-user"></i></a>
                <a href="" class="my-2 text-2xl"><i class="fa-solid fa-lock"></i></i></a>
                <a href="" class="my-2 text-2xl"><i class="fa-solid fa-user"></i></a>

            </div>

            <div class=" relative  flex justify-self-center w-10/12 h-4/5 bg-white shadow-md shadow-black rounded-md justify-center items-center">

                <div class="w-full h-full items-center justify-evenly -translate-x-40 flex flex-col ">
                    <span class="text-2xl  ">General Information</span>
                    <div>
                        <span class="border-b-2 w-1/2 px-8">First Name</span>
                        <span class="border-b-2 w-1/2 px-8">Last Name</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="border-b-2 w-full px-8">Gender</span>
                        <span class="border-b-2 w-full px-8">Email</span>
                        <span class="border-b-2 w-full px-8">Position</span>
                    </div>

                </div>





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






    
@endsection

