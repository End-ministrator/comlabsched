@extends('layouts.main')
{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
@section('title', 'Log In')

@section('content')

<div class="flex flex-col h-screen bg-gradient-to-tl from-pink-500 to-yellow-500">
  


  <div class="flex h-full">
    
    <!-- main content start -->
    <div class="flex flex-row items-center justify-center mx-24 my-24 basis-4/5">
      <div class="w-60 h-128 basis-1/3 flex  shadow-black shadow-md bg-[url('/images/bgg.jpg')] bg-no-repeat bg-cover rounded-l-md relative sm:hidden md:hidden lg:block hidden">

      </div>
      <div class="w-30 h-128 basis-1/3 flex sm:w-30 md:36 lg:w-60  bg-white shadow-black shadow-md  rounded-r-md relative flex-col items-center justify-evenly  backdrop-filter backdrop-blur-sm bg-opacity-20 ">
          <div class="ml-4">
              
              <div class="flex  justify-center items-center mb-10 sm:inset-y-20 md:inset-y-20 lg:inset-y-0 inset-y-20 relative mt-6 ">
                  <!-- logo --><i class="fa-solid fa-user-secret text-5xl"></i>
                  <span class="text-3xl">LOGO</span>
              </div>
              <div class="font-semibold flex justify-start w-72  flex-col sm:opacity-0 md:opacity-0 lg:opacity-100 opacity-0">
                  <span class="text-4xl mb-4">Welcome Back</span>
                  <span class="text-sm">Good day! please enter your details </span>
              </div>
          </div>
              <form action="/login" method="post" class="flex flex-col basis-4/6 mt-10 ">
                  @csrf
                  <div class="border-b-2 border-solid border-black my-2 ">
                    <label id="emaillabel" for="email" class="absolute text-black  block my-2 text-sm -translate-y-1 transition-transform duration-100 ease-in-out ">Email</label>
                    <input type="email" name="email" id="email" required class="relative pl-2 w-full flex rounded-sm shadow-none focus:outline-none bg-transparent">
                    <i class="fa-solid fa-envelope absolute translate-x-48 -translate-y-5"></i>
                  </div>
                  
              
                  <br>
                  <div class="border-b-2 border-solid border-black my-2 ">
                    <label for="password" id="passlabel" class=" text-black  block my-2 text-sm absolute transform -translate-y-1  transition-transform duration-100 ease-in-out " >Password</label>
                    <input type="password" name="password" id="password" required class=" relative w-full px-2 flex rounded-sm   focus:outline-none bg-transparent border-none shadow-none ">
                    <!-- <span class="border border-white inset-0 rounded-full absolute"></span> -->
                    <i class="fa-solid fa-lock absolute translate-x-48 -translate-y-5"></i>
                  </div>

                  
                  
                  <br>
                  <div class=" flex items-center my-5">
                  <input type="submit" value="Log in" class="bg-white hover:bg-gray-200 text-sm font-semibold flex w-full h-8 justify-center px-2 rounded-lg border border-transparent ">
                  </div>
                  @error('email') 
                      <p class="error ">{{ $message }}</p> 
                  @enderror
              </form>

      </div>
      
        </div>
          
    </div>
  </div>
</div>


<script>
  const Pinput = document.getElementById('password');
  const Plabel = document.getElementById('passlabel');
  const Einput = document.getElementById('email');
  const Elabel = document.getElementById('emaillabel');

  Pinput.addEventListener('focus', ()=> {
    console.log('Input box clicked');
    Plabel.classList.add('-translate-y-6')
    // Additional actions you want to perform when the input box is clicked
  });
  Pinput.addEventListener('blur', () => {
    if (Pinput.value === '') {
      Plabel.classList.remove('-translate-y-6');
    }
  });
  Einput.addEventListener('focus', ()=> {
    console.log('Input box clicked');
    Elabel.classList.add('-translate-y-6')
    // Additional actions you want to perform when the input box is clicked
  });
  Einput.addEventListener('blur', () => {
    if (Einput.value === '') {
      Elabel.classList.remove('-translate-y-6');
    }
  });

</script>
   
        
@endsection