@extends('layouts.main')
{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
@section('title', 'Log In')

@section('content')

<div class="flex flex-col h-screen">
  <nav class="bg-white  dark:bg-gray-900  border shadow-md"> 
    <!-- <span class="sm:text-red-500 md:text-yellow-500 lg:text-green-500">md</span> -->
    <div class="flex flex-row justify-between"> 
      <a href="https://flowbite.com/" class="flex items-center space-x-2 ml-10">
        <i class="fa-solid fa-cube text-2xl"></i>
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">LOGO</span>
      </a>
      <!-- search -->
      <div class="items-center flex ">
        <div class="relative rounded-md ">
          <input class="pl-10 pr-4 py-2 w-full rounded-md  bg-white border border-gray-300 placeholder-gray-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500 " type="text" placeholder="Search...">
          <div class="absolute  left-0 inset-y-3 flex  pl-3">
            <i class="fa-solid fa-magnifying-glass mr-2"></i>
          </div>
        </div>
      </div>

      <!-- menu -->

      
      <div>
        <ul class="flex  flex-row h-full items-center mr-2  ">
          <li class="w-12 h-12 mt-2"><img src="/images/usersample.jpg" alt="" class="rounded-full bg-contain bg-no-repeat "> </li>
          <li class="-inset-y-4 sm:hidden md:hidden lg:block hidden">Welcome[First Name]</li>
        </ul>
      </div>
    </div>
      
  </nav>


  <div class="flex h-full">
    <!-- side bar start -->
      <div class="bg-white h-screen lg:w-60 md:w-48 w-44
      flex flex-col justify-between border border-black rounded-none shadow-md ">
        <div class="flex flex-col space-y-6 sm:space-y-6 md:space-y-6 lg:space-y-4 text-lg font-semibold mt-10">
          <button class="grid hover:bg-gray-200 rounded-md mx-2 py-1 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1  -space-x-6 items-center"><i class="fa-solid fa-house mr-2"></i><a href="#" class="justify-self-start sm:hidden md:hidden lg:block hidden">Dashboard</a></button>
          <button class="grid hover:bg-gray-200 rounded-md mx-2 py-1 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1  -space-x-6 items-center"><i class="fa-solid fa-magnifying-glass mr-2"></i><a href="#" class="justify-self-start sm:hidden md:hidden lg:block hidden">Monitoring</a></button>
          <button class="grid hover:bg-gray-200 rounded-md mx-2 py-1 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1  -space-x-6 items-center"><i class="fa-solid fa-calendar mr-2"></i><a href="#" class="justify-self-start sm:hidden md:hidden lg:block hidden">Scheduling</a></button>
          <button class="grid hover:bg-gray-200 rounded-md mx-2 py-1 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1  -space-x-6 items-center"><i class="fa-solid fa-users mr-2"></i><a href="#" class="justify-self-start sm:hidden md:hidden lg:block hidden">Faculty</a></button>
          <button class="grid hover:bg-gray-200 rounded-md mx-2 py-1 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1  -space-x-6 items-center"><i class="fa-solid fa-clipboard-list mr-2"><a href="#" class="justify-self-start sm:hidden md:hidden lg:block hidden"></i>Logs</a></button>
          <button class="grid hover:bg-gray-200 rounded-md mx-2 py-1 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1  -space-x-6 items-center"><i class="fa-solid fa-gear mr-2"></i><a href="#" class="justify-self-start sm:hidden md:hidden lg:block hidden">Settings</a></button>
        </div>
        <div class=" flex flex-col text-lg font-semibold mb-10 justify-center">
          <button class="grid hover:bg-gray-200 rounded-md mx-2 py-1 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 -space-x-6 items-center"><i class="fa-solid fa-arrow-right-from-bracket mr-2"></i><a href="#" class="justify-self-start sm:hidden md:hidden lg:block hidden">Log Out</a></button>
        </div>
    </div>
    <!-- main content start -->
    <div class="flex flex-row items-center justify-center mx-24 my-24 basis-4/5">
      <div class="w-60 h-128 basis-1/2 flex  shadow-black shadow-md bg-[url('/images/bgg.jpg')] bg-no-repeat bg-cover rounded-md relative inset-x-12 ">

      </div>
      <div class="w-60 h-120 basis-1/3 flex  shadow-black shadow-md bg-scarlet rounded-md relative flex-col items-center justify-evenly  backdrop-filter backdrop-blur-sm bg-opacity-40 ">
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
                  <input type="submit" value="Login" class="  bg-red-400 hover:bg-red-200 text-sm flex w-full justify-center px-2 rounded-md border border-transparent ">
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