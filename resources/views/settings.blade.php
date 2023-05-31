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
        <div class="flex flex-col w-full h-screen items-center bg-smokeywhite dark:bg-gray-800">
                <!-- categories -->
  
                <!-- end categories -->

                <!-- general category  -->
            <div id="general"class=" dark:bg-gray-700 flex  mt-5 mb-3 py-6 w-11/12 h-screen bg-white shadow  rounded-md flex-col justify-between ">
                <div class="flex flex-col">

                  
                    <div class="w-full h-10 flex items-center ml-6 text-3xl">
                        <span>Account Settings</span>
                    </div>

                    <div class="w-full h-20 flex justify-evenly">
                        <div class="flex  w-full">
                            <button class="w-28 h-28 hover:brightness-75 group flex justify-center items-center mb-10 ml-6">
                                <span class="absolute text-white z-50 opacity-0 group-hover:opacity-100">Change</span>
                                <img src="images\raymond.jpg" alt="" class="w-full h-full rounded-full"> 
                            </button>
                            <div class="flex flex-col justify-center mt-6 ml-6 space-y-4">
                                <span class=" flex text-2xl ml-6 items-center">Raymond Matullano</span>
                                <div class=" ml-6 h-9 w-14 flex items-center justify-center rounded-full bg-blue-500"><span>Admin</span></div>
                            </div>


                        </div>
                        <div class="mr-10 flex flex-col justify-between h-72 ">
                            <button id="editbtn">
                                <span class="flex dark:bg-blue-700 bg-blue-600 h-9 w-14 items-center justify-center rounded-lg"  >
                                <i class="fa-solid fa-pencil"></i>
                                    Edit
                                </span>
                            </button>
                            <div class="flex justify-end w-1/3 space-x-3 translate-y-96 sm:translate-y-72 md:translate-y-72 lg:translate-y-64">
                                <button id="Gcancel" class="relative  hidden -inset-y-3">
                                    Cancel
                                </button>
                                <button id="Gsave" class="relative  hidden -inset-y-3">
                                    Save
                                </button>
                            </div>  

                        </div>

                    </div>
                </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 mt-10 sm:mt-10 md:mt-10 lg:mt-2  mb-10 ml-6 space-y-3 ">
                        <div class="space-y-2 flex justify-center flex-col">
                            <span>Last Name</span>
                            <span class="opacity-50">Matullano</span>
                            <input type="text" class="gensen absolute hidden bg-white translate-y-3 shadow-inner shadow-yellow-500 rounded-lg w-44 focus:outline-none pl-1 ">
                        </div>
                        <div class="space-y-2 flex justify-center flex-col">
                            <span>First Name</span>
                            <span class="opacity-50">Raymond</span>
                            <input type="text" class="gensen absolute hidden bg-white translate-y-3 shadow-inner shadow-yellow-500 rounded-lg w-44 focus:outline-none pl-1 ">
                        </div>
                        <div class="space-y-2 flex justify-center flex-col">
                            <span>Middle Initial</span>
                            <span class="opacity-50">Tampipi</span>
                            <input type="text" class="gensen absolute hidden bg-white translate-y-3 shadow-inner shadow-yellow-500 rounded-lg w-44 focus:outline-none pl-1 ">
                        </div>
                        <div class="space-y-2 flex justify-center flex-col">
                            <span>Email</span>
                            <span class="opacity-50">r.matullano@gmail.com</span>
                            <input type="text" class="gensen absolute hidden bg-white translate-y-3 shadow-inner shadow-yellow-500 rounded-lg w-44 focus:outline-none pl-1 ">
                        </div>
                    </div>
                



            </div>

            
                <!-- end general category -->

                <!-- Password Category -->
            <div id="password"class="flex flex-col sm:flex-col md:flex-row lg:flex-row mb-12 justify-self-center w-11/12 h-140 sm:h-140 md:h-140  lg:h-4/5 bg-white dark:bg-gray-700 shadow rounded-md justify-between items-center">
                
                 <div class="w-11/12 sm:w-11/12 m:w-11/12 lg:w-1/3 h-full  flex flex-col ml-6">
                    <div class="flex flex-col">
                        <span class="text-3xl my-10">Password Settings</span>
                        <span>Please enter your password to change your password</span>      

                    </div>    
                 </div>

                 <div class="flex w-1/2 space-x-20 justify-between">
                   
                        <div id="form"class="w-full mt-10 flex flex-col opacity-30  ">
                            <span id="label1" class="relative transform">Current Password</span>
                            <div class="w-6/12 mb-6 border border-blue-600 dark:border-blue-700"></div>
                            <span id="label2" class="relative transform">New Password</span>
                            <div class="w-6/12 mb-6 border border-blue-600 dark:border-blue-700"></div>
                            <span id="label3" class="relative transform">Retype New Password</span>
                            <div class="w-6/12 mb-6 border border-blue-600 dark:border-blue-700"></div>
                            <input id="current"type="password" required class="dark:bg-gray-600 hidden w-1/5  pl-1   shadow-inner shadow-blue-600 dark:shadow-blue-700 rounded-md focus:outline-none  absolute translate-y-1 ">
                            <input id="new"type="password" required class="dark:bg-gray-600 hidden w-1/5    pl-1 shadow-inner shadow-blue-600 dark:shadow-blue-700 rounded-md focus:outline-none  absolute translate-y-14">
                            <input id="rnew"type="password" required class="dark:bg-gray-600 hidden w-1/5   pl-1  shadow-inner shadow-blue-600 dark:shadow-blue-700 rounded-md focus:outline-none  absolute translate-y-26 ">
                            
                            <ul class="flex justify-center mr-5 md:translate-x-16 lg:-translate-x-1">
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
                   </div>

                    <div class="flex flex-col justify-between h-full pt-10 pb-8 ">

                    

                        <button id="editbutton" class="mr-10">
                            <span class="flex dark:bg-blue-700 bg-blue-600 h-9 w-14 items-center justify-center rounded-lg"  >
                                <i class="fa-solid fa-pencil"></i>
                                Edit
                            </span>
                        </button>
                        <div class="flex justify-end w-1/3 space-x-3 sm:mt-10 md:translate-y-44 lg:translate-y-36  mr-12">
                            <button id="Pcancel" class="relative hidden -inset-y-3">
                                Cancel
                            </button>
                            <button id="Psave" class="relative hidden -inset-y-3">
                                Save
                            </button>
                        </div>


                    </div>
                </div>

            </div>
            <!-- end password category -->

        </div>    

    </div>

</div>


<script>

// const userTheme = localStorage.getItem("theme");
// const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;
// // initial Theme check
// const themeCheck = () => {
// if(userTheme === "dark" || (!userTheme && systemTheme)){
//     document.documentElement.classList.add('dark');
//     return;

// }else {
//     document.documentElement.classList.remove('dark');
//     return;
// }

// };

// // manual Theme Switch
// const themeSwitch = () => {
// if(document.documentElement.classList.contains("dark")){
//     document.documentElement.classList.remove("dark");
//     localStorage.setItem("theme","light");

//     return;
// }
// document.documentElement.classList.add("dark");
// localStorage.setItem("theme","dark");

// }
// themeCheck();



    const eyes = document.querySelectorAll('.eye');



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
    const dark = document.querySelectorAll('fa-sun');
    const light = document.querySelectorAll('fa-moon');

    const gensens = document.querySelectorAll('.gensen');
    const editbtn = document.getElementById('editbtn');
    const Gcancel =document.getElementById('Gcancel');
    const Gsave =document.getElementById('Gsave');


    editbtn.addEventListener('click', function (){
        gensens.forEach(gensen => {
    
        if(gensen.classList.contains('hidden')){
            gensen.classList.remove('hidden');
            editbtn.classList.add('hidden');
            Gcancel.classList.remove('hidden');

            Gsave.classList.remove('hidden');
            console.log('Button clicked');
        }else{
            gensen.classList.add('hidden');
            editbtn.classList.remove('hidden');
            Gcancel.classList.add('hidden');
            Gsave.classList.add('hidden');
        }

        }); 
    });
    Gcancel.addEventListener('click', function(){
        gensens.forEach(gensen => {
    
        if(gensen.classList.contains('hidden')){
            gensen.classList.remove('hidden');
            editbtn.classList.add('hidden');
            Gcancel.classList.remove('hidden');

            Gsave.classList.remove('hidden');
            console.log('Button clicked');
        }else{
            gensen.classList.add('hidden');
            editbtn.classList.remove('hidden');
            Gcancel.classList.add('hidden');
            Gsave.classList.add('hidden');
        }

    }); 


    });
    Gsave.addEventListener('click', function(){

        gensens.forEach(gensen => {
    
    if(gensen.classList.contains('hidden')){
        gensen.classList.remove('hidden');
        editbtn.classList.add('hidden');
        Gcancel.classList.remove('hidden');

        Gsave.classList.remove('hidden');
        console.log('Button clicked');
    }else{
        gensen.classList.add('hidden');
        editbtn.classList.remove('hidden');
        Gcancel.classList.add('hidden');
        Gsave.classList.add('hidden');
    }

    }); 


        
    });


    // const theme = document.getElementById('themee');

    // const sunIcon = document.getElementById('sun');

    // const moonIcon = document.getElementById('moon');
    
    // theme.addEventListener('click', function (){
    //     if (sunIcon.classList.contains('invisible')) {
    //         sunIcon.classList.remove('invisible');
    //         moonIcon.classList.add('invisible');
    //         themeSwitch();
            
    // } else {
    //         sunIcon.classList.add('invisible');
    //         moonIcon.classList.remove('invisible');
    //         themeSwitch();
    // }
    // });
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
    pbutton.classList.add('hidden');
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
    pbutton.classList.remove('hidden');
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
    pbutton.classList.remove('hidden');

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

