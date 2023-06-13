@extends('layouts.main')

@section('title', 'Department Head | Dashboard')

@section('content')

@if (session('success'))
    <script>
        toastr.success("{{ session('success') }}");
    </script>
@endif

@if (session('error'))
    <script>
        toastr.error("{{ session('error') }}");
    </script>
@endif

    <div class="flex flex-row ">

        <div class=" flex">
                @if(auth()->user()->role == 'Admin')
                <script>const flag = 1;</script>
                <x-nav-bar/>
                @endif
                @if(auth()->user()->role == 'Faculty')
                <script>const flag = 2;</script>
                <x-nav-bar-user/>
                @endif
        </div>

        <div class=" lg:ml-x sm:ml-xsm  md:ml-xmd ml-xsm  flex-col w-full h-screen  ">
            <x-topbar />
            <!-- main content goes here -->
            <div class="flex flex-col w-full h-screen items-center bg-smokeywhite dark:bg-gray-800">
                <!-- categories -->

                <!-- end categories -->

                <!-- general category  -->
                <div class="flex w-full px-7 ">
                    <div id="general"class=" dark:bg-gray-700 flex  mt-5 mb-3 py-6 w-full h-128 sm:h-120 md:h-112 lg:h-96 bg-white shadow  rounded-md flex-col justify-evenly sm:justify-start md:justify-evenly lg:justify-between ">
                        <div class="flex flex-col">


                            <div class="w-11/12 h-10 flex items-center ml-7 mb-2 text-3xl">
                                <span>Account Settings</span>
                            </div>

                            <div class="w-full h-20 flex pl-7 justify-between px-7 space-x-6">
                                <div class="flex">

                                
                                    <button id="profileButton"class="w-28 h-28 hover:brightness-75 group flex justify-center items-center ">
                                        <span class="absolute text-white z-50 opacity-0 group-hover:opacity-100">Change</span>
                                        <img src=" {{ asset(Auth::user()->image) }} " alt="Profile Picture" class="w-full h-full rounded-full">
                                    </button>

                                    <form action="{{ route('uploadProfile') }}" method="POST" enctype="multipart/form-data" class="flex">
                                        @csrf
                                        <div class="flex w-full h-20 ">
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                            <div id="pictureUpdate" class="absolute hidden transition-transform transform duration-500">
                                                <input type="file" name="profile_picture" class=" translate-y-32 -translate-x-32 h-7 absolute w-48 rounded-l-lg  bg-white">
                                                <button id="profileUpload" class="translate-y-32 translate-x-16 text-white absolute hidden transition-transform transform  !important w-20 h-7  bg-blue-700 rounded-r-lg " type="submit">Upload</button>
                                            </div>


                                        
                                    
                                    </form>
                                </div>

                                <div class="flex flex-col justify-center mt-6 ml-6 space-y-4">
                                    <span
                                        class=" flex text-2xl ml-6 items-center">{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}
                                    </span>
                                    <div
                                        class="text-white !important ml-6 h-9 w-20 flex items-center justify-center rounded-full bg-blue-500">
                                        <span>{{ Auth::user()->role }}</span>
                                    </div>
                                </div>


                            </div>
                            <div class="mr-10 flex flex-col justify-between h-72 ">
                                <button id="editbtn">
                                    <span
                                        class="flex text-white !important dark:bg-blue-700 bg-blue-600 h-9 w-20 items-center justify-center rounded-lg">
                                        <i class="fa-solid fa-pencil"></i>
                                        Edit
                                    </span>
                                </button>
        

                            </div>

                        </div>
                    </div>
                    <form action="{{ route('profileUpdate') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 mt-10 sm:mt-10 md:mt-10 lg:mt-2  mb-10 ml-7 space-y-3 ">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="space-y-2 flex justify-center flex-col">
                                <span>Last Name</span>
                                <span class="opacity-50">{{ Auth::user()->lastname }}</span>
                                <input type="text" value="{{ Auth::user()->lastname }}" name="lastname" id="lastname"
                                    class="gensen absolute hidden bg-gray-200 dark:bg-gray-500  translate-y-3 shadow-inner dark:shadow-blue-600 shadow-blue-600 rounded-lg w-44 focus:outline-none pl-1 ">
                            </div>
                            <div class="space-y-2 flex justify-center flex-col">
                                <span>First Name</span>
                                <span class="opacity-50">{{ Auth::user()->firstname }}</span>
                                <input type="text" value="{{ Auth::user()->firstname }}" name="firstname" id="firstname"
                                    class="gensen absolute hidden bg-gray-200 dark:bg-gray-500  translate-y-3 shadow-inner dark:shadow-blue-600 shadow-blue-600 rounded-lg w-44 focus:outline-none pl-1 ">
                            </div>
                            {{-- <div class="space-y-2 flex justify-center flex-col">
                                    <span>Middle Initial</span>
                                    <span class="opacity-50">Tampipi</span>
                                    <input type="text" class="gensen absolute hidden bg-gray-200 dark:bg-gray-500  translate-y-3 shadow-inner dark:shadow-blue-600 shadow-blue-600 rounded-lg w-44 focus:outline-none pl-1 ">
                                </div> --}}
                            <div class="space-y-2 flex justify-center flex-col">
                                <span>Email</span>
                                <span class="opacity-50">{{ Auth::user()->email }}</span>
                                <input type="text" value="{{ Auth::user()->email }}" name="email" id="email"
                                    class="gensen absolute hidden bg-gray-200 dark:bg-gray-500  translate-y-3 shadow-inner dark:shadow-blue-600 shadow-blue-600 rounded-lg w-44 focus:outline-none pl-1 ">
                            </div>
                        </div>



                        <div class="w-full flex justify-end pr-7 space-x-3">
                            <button id="Gcancel"
                                class=" text-lg px-4 border w-20 h-9 border-blue-700 rounded-lg hidden -inset-y-3">
                                Cancel
                            </button>
                            <button id="Gsave"
                                class=" text-white !important w-20 h-9 px-4 text-lg bg-blue-700 rounded-lg hidden -inset-y-3">
                                Save
                            </button>
                        </div>

                       
                    </form>



                </div>
            </div>

            <!-- end general category -->

            <!-- Password Category -->

            <div class="flex px-7 mt-3 w-full h-140 sm:h-140 md:h-140  lg:h-4/5">

                <div
                    id="password"class="flex flex-col pb-7 sm:flex-col md:flex-col lg:flex-row  mb-12 justify-self-center w-full h-full bg-white dark:bg-gray-700 shadow rounded-md justify-between items-center">

                    <div class="w-11/12 sm:w-11/12 m:w-11/12 lg:w-1/3 h-1/4 sm:h-1/4 md:h-full lg:h-full flex flex-col ml-6">
                        <div class="flex flex-col">
                            <span class="text-3xl my-10">Password Settings</span>
                            <span>Please enter your password to change your password</span>

                        </div>
                    </div>
                    <form action="{{ route('updatePassword') }}" method="POST"
                        class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 w-full h-full items-center justify-center">
                        @csrf
                        <div class="flex w-full space-x-20 justify-between">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div id="form"class="w-full mt-10 flex flex-col opacity-30  ">
                                <span id="label1" class="relative transform">Current Password</span>
                                <div class="w-5/12 mb-6 border border-blue-600 dark:border-blue-700"></div>
                                <input id="current" type="password" name="current_password" required
                                    class="dark:bg-gray-500 bg-gray-200 hidden w-1/2 sm:w-1/3 md:w-1/5 lg:w-1/5  pl-1    rounded-md focus:outline-none  absolute translate-y-1 ">

                                <span id="label2" class="relative transform">New Password</span>
                                <div class="w-5/12 mb-6 border border-blue-600 dark:border-blue-700"></div>
                                <input id="new" type="password" name="new_password" required
                                    class="dark:bg-gray-500 bg-gray-200 hidden w-1/2 sm:w-1/3 md:w-1/5 lg:w-1/5    pl-1  rounded-md focus:outline-none  absolute translate-y-14">

                                <span id="label3" class="relative transform">Retype New Password</span>
                                <div class="w-5/12 mb-6 border border-blue-600 dark:border-blue-700"></div>
                                <input id="rnew" type="password" name="new_password_confirmation" required
                                    class="dark:bg-gray-500 bg-gray-200 hidden w-1/2 sm:w-1/3 md:w-1/5 lg:w-1/5   pl-1   rounded-md focus:outline-none  absolute translate-y-26 ">

                                <ul class="flex justify-center mr-5 translate-x-28 sm:-translate-x-1 md:translate-x-8 lg:translate-x-24">
                                    <li class="eye hidden relative -translate-y-38 mt-1  ">
                                        <button id="revealpass1"class="text-sm absolute">
                                            <i class="fa-solid fa-eye"></i></button>
                                        <button id="hidepass1"class="text-sm hidden absolute">
                                            <i class=" fa-solid fa-eye-slash"></i></button>
                                    </li>
                                    <li class="eye hidden relative -translate-y-24 mt-1 ">
                                        <button id="revealpass2"class="text-sm absolute">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                        <button id="hidepass2"class="text-sm hidden absolute">
                                            <i class="fa-solid fa-eye-slash"></i>
                                        </button>
                                    </li>
                                    <li class="eye hidden relative -translate-y-12 mt-1  ">
                                        <button id="revealpass3"class="text-sm absolute">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                        <button id="hidepass3"class="text-sm hidden absolute">
                                            <i class="fa-solid fa-eye-slash"></i>
                                        </button>
                                    </li>
                                </ul>

                            </div>


                        </div>

                        <div class="flex rotate-180 pt-7 pl-7 w-full h-full justify-self-end  space-x-4">

                            <button id="Psave"
                                class=" text-white rotate-180 !important relative hidden - rounded-lg px-4 text-lg bg-blue-700 w-20 h-9">
                                Save
                            </button>

                            <button id="Pcancel"
                                class="relative hidden rotate-180  rounded-lg px-4 text-lg border border-blue-700 w-20 h-9">
                                Cancel
                            </button>
                            <div class="flex flex-col justify-between h-full pt-10 pb-8 ">
                                <button id="editbutton" class="mr-10 rotate-180 ">
                                    <span
                                        class="flex text-white !important dark:bg-blue-700 bg-blue-600 h-9 w-20 items-center justify-center rounded-lg">
                                        <i class="fa-solid fa-pencil"></i>
                                        Edit
                                    </span>
                                </button>
                            </div>

                        </div>


                    </form>




                </div>


            </div>

        </div>
        <!-- end password category -->

    </div>

    </div>

    </div>


    <script>
        // profile picture JS
        const profileButton = document.getElementById('profileButton');
        const profileUpdate = document.getElementById('pictureUpdate');
        const profileUpload = document.getElementById('profileUpload');

        profileButton.addEventListener('click', function() {
            if (profileUpdate.classList.contains('hidden')) {
                profileUpdate.classList.add('translate-x-3');
                profileUpdate.classList.remove('hidden');
                profileUpload.classList.add('translate-x-3');
                profileUpload.classList.remove('hidden');

            } else {
                profileUpdate.classList.remove('translate-x-3');
                profileUpdate.classList.add('hidden');
                profileUpload.classList.remove('translate-x-3');
                profileUpload.classList.add('hidden');

            }


        });




        // nav bar indicator style
        if(flag === 1){
            ds.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            us.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            lg.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            mn.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            sc.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            st.classList.add('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-900');
        }else{
            ds.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            lg.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            mn.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            st.classList.add('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-900');
        }
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
        const Gcancel = document.getElementById('Gcancel');
        const Gsave = document.getElementById('Gsave');


        editbtn.addEventListener('click', function() {
            gensens.forEach(gensen => {

                if (gensen.classList.contains('hidden')) {
                    gensen.classList.remove('hidden');
                    editbtn.classList.add('hidden');
                    Gcancel.classList.remove('hidden');

                    Gsave.classList.remove('hidden');
                    console.log('Button clicked');
                } else {
                    gensen.classList.add('hidden');
                    editbtn.classList.remove('hidden');
                    Gcancel.classList.add('hidden');
                    Gsave.classList.add('hidden');
                }

            });
        });
        Gcancel.addEventListener('click', function() {
            gensens.forEach(gensen => {

                if (gensen.classList.contains('hidden')) {
                    gensen.classList.remove('hidden');
                    editbtn.classList.add('hidden');
                    Gcancel.classList.remove('hidden');

                    Gsave.classList.remove('hidden');
                    console.log('Button clicked');
                } else {
                    gensen.classList.add('hidden');
                    editbtn.classList.remove('hidden');
                    Gcancel.classList.add('hidden');
                    Gsave.classList.add('hidden');
                }

            });


        });
        Gsave.addEventListener('click', function() {

            gensens.forEach(gensen => {

                if (gensen.classList.contains('hidden')) {
                    gensen.classList.remove('hidden');
                    editbtn.classList.add('hidden');
                    Gcancel.classList.remove('hidden');

                    Gsave.classList.remove('hidden');
                    console.log('Button clicked');
                } else {
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
            plabel1.classList.add('-translate-y-5', 'transition-transform');
            plabel2.classList.add('-translate-y-5', 'transition-transform');
            plabel3.classList.add('-translate-y-5', 'transition-transform');
            current.classList.remove('hidden');
            newP.classList.remove('hidden');
            rnewP.classList.remove('hidden');
            pcancel.classList.remove('hidden');
            psave.classList.remove('hidden');
            form.classList.remove('opacity-30');
            pbutton.classList.add('hidden');
            current.value = '';
            newP.value = '';
            rnewP.value = '';

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
                eye.classList.remove('hidden');
                console.log('Button clicked');

            });

        });

        pcancel.addEventListener('click', function() {
            plabel1.classList.remove('-translate-y-5');
            plabel2.classList.remove('-translate-y-5');
            plabel3.classList.remove('-translate-y-5');
            current.classList.add('hidden');
            newP.classList.add('hidden');
            rnewP.classList.add('hidden');
            pcancel.classList.add('hidden');
            psave.classList.add('hidden');
            form.classList.add('opacity-30');
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

                eye.classList.add('hidden');
                console.log('Button clicked');

            });

        });
        psave.addEventListener('click', function() {
            plabel1.classList.remove('-translate-y-5');
            plabel2.classList.remove('-translate-y-5');
            plabel3.classList.remove('-translate-y-5');
            current.classList.add('hidden');
            newP.classList.add('hidden');
            rnewP.classList.add('hidden');
            pcancel.classList.add('hidden');
            psave.classList.add('hidden');
            form.classList.add('opacity-30');
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

                eye.classList.add('hidden');
                console.log('Button clicked');

            });

        });

        revealp1.addEventListener('click', function() {
            hidep1.classList.remove('hidden');
            revealp1.classList.add('hidden');
            current.type = 'text';
        });
        hidep1.addEventListener('click', function() {
            hidep1.classList.add('hidden');
            revealp1.classList.remove('hidden');
            current.type = 'password';
        });
        revealp2.addEventListener('click', function() {
            hidep2.classList.remove('hidden');
            revealp2.classList.add('hidden');
            newP.type = 'text';
        });
        hidep2.addEventListener('click', function() {
            hidep2.classList.add('hidden');
            revealp2.classList.remove('hidden');
            newP.type = 'password';
        });

        revealp3.addEventListener('click', function() {
            hidep3.classList.remove('hidden');
            revealp3.classList.add('hidden');
            rnewP.type = 'text';
        });
        hidep3.addEventListener('click', function() {
            hidep3.classList.add('hidden');
            revealp3.classList.remove('hidden');
            rnewP.type = 'password';
        });
    </script>

<script>
        // Show toastr notifications if success or error message is present in localStorage
        document.addEventListener('DOMContentLoaded', function () {
            const successMessage = localStorage.getItem('successMessage');
            const errorMessage = localStorage.getItem('errorMessage');

            if (successMessage) {
                toastr.success(successMessage);
                localStorage.removeItem('successMessage');
            }

            if (errorMessage) {
                toastr.error(errorMessage);
                localStorage.removeItem('errorMessage');
            }
        });

        // Rest of your JavaScript code...

    </script>








@endsection
