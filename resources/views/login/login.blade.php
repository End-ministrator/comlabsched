@extends('layouts.main')
{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
@section('title', 'Log In')

@section('content')
<script>
         function toggleDarkMode() {
        const body = document.querySelector('body');
        body.classList.toggle('dark');
        },

        const darkModeToggle = document.querySelector('#dark-mode-toggle');
        darkModeToggle.addEventListener('click', toggleDarkMode);

       
        
</script>
<div class="flex flex-col h-screen">
  


  <div class="flex h-full">
    
    <!-- main content start -->
    <div class="flex flex-row items-center justify-center mx-24 my-24 basis-4/5">
      <div class="w-60 h-128 basis-1/2 flex  shadow-black shadow-md bg-[url('/images/bgg.jpg')] bg-no-repeat bg-cover rounded-md relative lg:inset-x-12 md:inset-x-14 sm:inset-x-24 inset-x-36 ">

      </div>
      <div class="w-30 h-120 basis-1/3 flex sm:w-30 md:36 lg:w-60  bg-white shadow-black shadow-lg  rounded-md relative flex-col items-center justify-evenly  backdrop-filter backdrop-blur-sm bg-opacity-40 lg:-inset-x-12 md:-inset-x-14 sm:-inset-x-24 -inset-x-32">
          <div class="ml-4">
              
              <div class="flex  justify-center items-center mb-10 sm:inset-y-20 md:inset-y-20 lg:inset-y-0 inset-y-20 relative mt-6 ">
                  <!-- logo --><i class="fa-solid fa-user-secret text-5xl"></i>
                  <span class="text-3xl">ISMS</span>
              </div>
              <div class="font-semibold flex justify-start w-72  flex-col sm:opacity-0 md:opacity-0 lg:opacity-100 opacity-0">
                  <span class="text-4xl mb-4">Welcome Back</span>
                  <span class="text-sm">Good day! please enter your details </span>
              </div>
          </div>
              <form action="/login" method="post" class="flex flex-col basis-4/6 mt-10 ">
                  @csrf
                  <label for="email" class=" text-black   font-semibold block my-2 text-sm">Email</label>
                  <input type="email" name="email" id="email" required class=" pl-2 w-full flex rounded-sm   shadow-md focus:outline-1  ">
              
                  <br>
                  <label for="password" class=" text-black   font-semibold block my-2 text-sm" >Password</label>
                  <input type="password" name="password" id="password" required class="w-full px-2 flex rounded-sm  shadow-md focus:outline-1   ">
                  <br>
                  <div class=" container items-center my-5">
                  <input type="submit" value="Login" class="  bg-gray-400 hover:bg-gray-200 text-sm font-semibold flex w-full justify-center px-2 rounded-md border border-transparent ">
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



   
        
@endsection