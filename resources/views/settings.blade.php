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
            <div id=""class="absolute   flex mb-12 justify-self-start translate-x-6 transition-trasnform sm:translate-x-16 md:translate-x-28 lg:translate-x-40 h-5/6 w-14 sm:w-14 md:w-16 lg:w-20 bg-yellow-300 border z-50  justify-evenly items-center flex-col  space-y-20">
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
                <div class="w-full h-full items-center flex flex-col">
                        <span class="text-3xl font-semibold my-10">Password Settings</span>

                        <div class="w-1/3 mb-16 h-20 flex rounded-lg border border-yellow-400d bg-yellow-300 items-center justify-between">
                            <i class="fa-solid fa-key text-xl ml-4"></i>
                            <span class=" text-xl">Change Password</span>
                            <div class="h-full border border-yellow-500"></div>
                            <div class=" w-1/4 h-full rounded-r-lg flex justify-center">
                                <button id="editbutton">
                                    Edit
                                </button>
                            </div>

                        </div>
                        <div id="form"class="w-1/3 flex flex-col opacity-30  ">
                            <span id="label1" class="relative transform">Current Password</span>
                            <div class="mb-6 border border-b-yellow-500"></div>
                            <span id="label2" class="relative transform">New Password</span>
                            <div class="mb-6 border border-b-yellow-500"></div>
                            <span id="label3" class="relative transform">Retype New Password</span>
                            <div class="mb-6 border border-b-yellow-500"></div>
                            <input id="current"type="password" required class=" hidden w-1/3 shadow-inner shadow-yellow-500 rounded-md focus:outline-none  absolute translate-y-1 ">
                            <input id="new"type="password" required class=" hidden w-1/3 shadow-inner shadow-yellow-500 rounded-md focus:outline-none  absolute translate-y-14">
                            <input id="rnew"type="password" required class=" hidden w-1/3 shadow-inner shadow-yellow-500 rounded-md focus:outline-none  absolute translate-y-26 ">
                            
                            <ul class="flex justify-end mr-5">
                                <li  class="eye hidden relative -translate-y-38 mt-1  ">
                                    <button id="revealpass1"class="text-sm absolute"><i class="fa-solid fa-eye"></i></button>
                                    <button id="hidepass1"class="text-sm hidden absolute"><i class=" fa-solid fa-eye-slash"></i></button>
                                </li >
                                <li  class="eye hidden relative -translate-y-24 mt-1 ">
                                    <button id="revealpass2"class="text-sm absolute"><i class="fa-solid fa-eye"></i></button>
                                    <button id="hidepass2"class="text-sm hidden absolute"><i class="fa-solid fa-eye-slash"></i></button>
                                </li >
                                <li  class="eye hidden relative -translate-y-12 mt-1  ">
                                    <button id="revealpass3"class="text-sm absolute"><i class="fa-solid fa-eye"></i></button>
                                    <button id="hidepass3"class="text-sm hidden absolute"><i class="fa-solid fa-eye-slash"></i></button>
                                </li >
                            </ul>

                        </div>
                        <div class="flex justify-end w-1/3 space-x-3">
                            <button id="Pcancel" class="relative hidden -inset-y-3">
                                Cancel
                            </button>
                            <button id="Psave" class="relative hidden -inset-y-3">
                                Save
                            </button>
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

    const eyes = document.querySelectorAll('.eye');



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
    console.log('Clickeddd');

    });




    // pass
    const pbutton = document.getElementById('editbutton');
    const current = document.getElementById('current');
    const newP = document.getElementById('new');
    const rnewP = document.getElementById('rnew');
    const plabel1 = document.getElementById('label1');
    const plabel2 = document.getElementById('label2');
    const plabel3 = document.getElementById('label3');
    const pcancel = document.getElementById('Pcancel');
    const psave = document.getElementById('Psave');
    const form = document.getElementById('form');
    const hidep1 = document.getElementById('hidepass1');
    const revealp1 = document.getElementById('revealpass1');
    const hidep2 = document.getElementById('hidepass2');
    const revealp2 = document.getElementById('revealpass2');
    const hidep3 = document.getElementById('hidepass3');
    const revealp3 = document.getElementById('revealpass3');


    pbutton.addEventListener('click', function() {
    plabel1.classList.add('-translate-y-5','transition-transform');
    plabel2.classList.add('-translate-y-5','transition-transform');
    plabel3.classList.add('-translate-y-5','transition-transform');
    current.classList.remove('hidden');
    newP.classList.remove('hidden');
    rnewP.classList.remove('hidden');
    pcancel.classList.remove('hidden' );
    psave.classList.remove('hidden' );
    form.classList.remove('opacity-30' );
    current.value='';
    newP.value='';
    rnewP.value='';
    
    current.type = 'password';
    newP.type = 'password';
    rnewP.type = 'password';
    hidep1.classList.add('hidden');
    revealp1.classList.remove('hidden');
    hidep2.classList.add('hidden');
    revealp2.classList.remove('hidden');
    hidep3.classList.add('hidden');
    revealp3.classList.remove('hidden');



    eyes.forEach(eye => {
    
        // Your function logic here
        eye.classList.remove('hidden' );
        console.log('Button clicked');
        
    });
 
    });

    pcancel.addEventListener('click', function(){
    plabel1.classList.remove('-translate-y-5');
    plabel2.classList.remove('-translate-y-5');
    plabel3.classList.remove('-translate-y-5');
    current.classList.add('hidden');
    newP.classList.add('hidden');
    rnewP.classList.add('hidden');
    pcancel.classList.add('hidden');
    psave.classList.add('hidden');
    form.classList.add('opacity-30' );
    eyes.forEach(eye => {
    
    current.type = 'password';
    newP.type = 'password';
    rnewP.type = 'password';
    hidep1.classList.add('hidden');
    revealp1.classList.remove('hidden');
    hidep2.classList.add('hidden');
    revealp2.classList.remove('hidden');
    hidep3.classList.add('hidden');
    revealp3.classList.remove('hidden');

    eye.classList.add('hidden' );
    console.log('Button clicked');
    
});

    });
    psave.addEventListener('click', function(){
    plabel1.classList.remove('-translate-y-5');
    plabel2.classList.remove('-translate-y-5');
    plabel3.classList.remove('-translate-y-5');
    current.classList.add('hidden');
    newP.classList.add('hidden');
    rnewP.classList.add('hidden');
    pcancel.classList.add('hidden');
    psave.classList.add('hidden');
    form.classList.add('opacity-30' );

    eyes.forEach(eye => {
    
    current.type = 'password';
    newP.type = 'password';
    rnewP.type = 'password';
    hidep1.classList.add('hidden');
    revealp1.classList.remove('hidden');
    hidep2.classList.add('hidden');
    revealp2.classList.remove('hidden');
    hidep3.classList.add('hidden');
    revealp3.classList.remove('hidden');

    eye.classList.add('hidden' );
    console.log('Button clicked');
    
    });

    });
    
    revealp1.addEventListener('click', function(){
        hidep1.classList.remove('hidden');
        revealp1.classList.add('hidden');
        current.type='text';
    });
    hidep1.addEventListener('click', function(){
        hidep1.classList.add('hidden');
        revealp1.classList.remove('hidden');
        current.type='password';
    });
    revealp2.addEventListener('click', function(){
        hidep2.classList.remove('hidden');
        revealp2.classList.add('hidden');
        newP.type='text';
    });
    hidep2.addEventListener('click', function(){
        hidep2.classList.add('hidden');
        revealp2.classList.remove('hidden');
        newP.type='password';
    });

    revealp3.addEventListener('click', function(){
        hidep3.classList.remove('hidden');
        revealp3.classList.add('hidden');
        rnewP.type='text';
    });
    hidep3.addEventListener('click', function(){
        hidep3.classList.add('hidden');
        revealp3.classList.remove('hidden');
        rnewP.type='password';
    });




</script>






    
@endsection

