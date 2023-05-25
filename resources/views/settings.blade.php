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
                <!-- categories -->
            <div id=""class="absolute   flex mb-12 justify-self-start translate-x-40 h-5/6 w-20 bg-yellow-300 border z-50  justify-evenly items-center flex-col  space-y-20">
                <button id="Bgeneral" class="my-2 text-2xl"><i class="fa-solid fa-user"></i></button>
                <button id="Bpassword" class="my-2 text-2xl"><i class="fa-solid fa-lock"></i></i></button>
                <button id class="my-2 text-2xl"><i class="fa-solid fa-user"></i></button>
            </div>
                <!-- end categories -->

                <!-- general category  -->
             <div id="general"class=" absolute block flex mb-12 justify-self-center w-9/12 h-4/5 bg-white shadow-md shadow-black rounded-md justify-center items-center">

                <div class="w-full h-full items-center     flex flex-col ">
                    <span class="text-3xl font-semibold my-10">General Information</span>
                    <button class="w-44 h-44 hover:brightness-75 group flex justify-center items-center mb-10">
                        <span class="absolute text-white z-50 opacity-0 group-hover:opacity-100">Change</span>
                        <img src="images\raymond.jpg" alt="" class="w-full h-full rounded-full">
                        
                    </button>
                    <div class="w-1/3 flex flex-col">
                        <span class=" w-full text-gray-400">First Name</span>
                        <span>Raymond</span>
                        <div class="border border-b-yellow-400 w-full"></div>
                        <span class=" w-full text-gray-400">Last Name</span>
                        <span>Matullano</span>
                        <div class="border border-b-yellow-400 w-full"></div>
                    </div>
                    <div class="w-1/3 flex flex-col">
                        <span class=" w-full text-gray-400">Gender</span>
                        <span>Male</span>
                        <div class="border border-b-yellow-400 w-full"></div>
                        <span class=" w-full text-gray-400">Position</span>
                        <span>Faculty</span>
                        <div class="border border-b-yellow-400 w-full"></div>
                        <span class=" w-full text-gray-400">Email</span>
                        <span>r.matullano@gmail.com</span>
                        <div class="border border-b-yellow-400 w-full"></div>
                       
                    </div>

                </div>





             </div>
                <!-- end general category -->

                <!-- Password Category -->
            <div id="password"class=" absolute hidden  flex mb-12 justify-self-center w-9/12 h-4/5 bg-white shadow-md shadow-black rounded-md justify-center items-center">
                <div class="w-full h-full items-center     flex flex-col ">
                        <span class="text-3xl font-semibold my-10">Password Settings</span>

                        <div class="w-1/3 flex flex-col">
                            <span class=" w-full text-gray-400">Change Password</span>
                            <span>Raymond</span>
                            <div class="border border-b-yellow-400 w-full"></div>
                            <span class=" w-full text-gray-400">Last Name</span>
                            <span>Matullano</span>
                            <div class="border border-b-yellow-400 w-full"></div>
                        </div>
                        <div class="w-1/3 flex flex-col">
                            <span class=" w-full text-gray-400">Gender</span>
                            <span>Male</span>
                            <div class="border border-b-yellow-400 w-full"></div>
                            <span class=" w-full text-gray-400">Position</span>
                            <span>Faculty</span>
                            <div class="border border-b-yellow-400 w-full"></div>
                            <span class=" w-full text-gray-400">Email</span>
                            <span>r.matullano@gmail.com</span>
                            <div class="border border-b-yellow-400 w-full"></div>
                        
                        </div>

                    </div>
            </div>
            <!-- end password category -->

        </div>    

    </div>

</div>

<script>
    const gen = document.getElementById('general');
    const pass = document.getElementById('password');

    const Bgen = document.getElementById('Bgeneral');
    const Bpass = document.getElementById('Bpassword');

    Bgen.addEventListener('click', function() {
    gen.classList.remove('hidden');
    gen.classList.add('block');
    pass.classList.add('hidden');
    });

    Bpass.addEventListener('click', function() {    
    pass.classList.add('block');
    pass.classList.remove('hidden');
    gen.classList.add('hidden');
    gen.classList.remove('block');

    });


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

