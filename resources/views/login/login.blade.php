@extends('layouts.main')
{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
@section('title', 'Log In')

@section('content')

<div class="flex flex-col h-screen">
  


  <div class="flex h-full">
    
    <!-- main content start -->
    <div class="flex flex-row items-center justify-center mx-24 my-24 basis-4/5">
      <div class="w-60 h-128 basis-1/2 flex  shadow-black shadow-md bg-[url('/images/bgg.jpg')] bg-no-repeat bg-cover rounded-md relative inset-x-12 ">

      </div>
      <div class="w-60 h-120 basis-1/3 flex  shadow-black shadow-md bg-white rounded-md relative flex-col items-center justify-evenly  backdrop-filter backdrop-blur-sm bg-opacity-40 ">
          <div class="ml-4">
              
              <div class="flex  justify-center items-center mb-10 ">
                  <!-- logo --><i class="fa-solid fa-user-secret text-5xl"></i>
                  <span class="text-3xl">logo</span>
              </div>
              <div class="font-semibold flex justify-start w-96 flex-col">
                  <span class="text-5xl mb-4">Welcome Back</span>
                  <span class="text-md">Good day! please enter your details </span>
              </div>
          </div>
              <form action="/login" method="post" class="flex flex-col w-80 ">
                  @csrf
                  <label for="email" class=" text-black  block my-2 text-sm">Email</label>
                  <input type="email" name="email" id="email" required class="w-full flex rounded-sm  focus:outline-none shadow-inner focus:outline-4  ">
              
                  <br>
                  <label for="password" class=" text-black  block my-2 text-sm" >Password</label>
                  <input type="password" name="password" id="password" required class="w-full px-2 flex rounded-sm focus:outline-none shadow-inner focus:outline-4   ">
                  <br>
                  <div class=" container items-center my-5">
                  <input type="submit" value="Login" class="  bg-gray-400 hover:bg-gray-200 text-sm flex w-full justify-center px-2 rounded-md border border-transparent ">
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