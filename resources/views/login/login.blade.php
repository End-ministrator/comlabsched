@extends('layouts.main')
{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
@section('title', 'Log In')

@section('content')
<div class="flex flex-row items-center justify-center mx-24 my-24 ">
    <div class="w-60 h-112 basis-1/2 flex bg-[url('/images/bgg.jpg')] bg-no-repeat bg-cover rounded-md relative inset-x-12 ">

    </div>
    <div class="w-60 h-128 basis-1/2 flex  bg-amber-500 rounded-md relative flex-col items-center justify-evenly  backdrop-filter backdrop-blur-sm bg-opacity-40 ">
        <div>
            
            <div class="flex  justify-center items-center mb-10 ">
                <!-- logo --><i class="fa-solid fa-user-secret text-5xl"></i>
                <span class="text-3xl">logo</span>
            </div>
            <div class="font-semibold flex justify-start w-96 flex-col">
                <span class="text-5xl mb-4">Welcome Back</span>
                <span class="text-md">Good day! please enter your details </span>
            </div>
        </div>
            <form action="/login" method="post" class="flex flex-col w-96 ">
                @csrf
                <label for="email" class=" text-gray-500 block my-2 text-sm">Email</label>
                <input type="email" name="email" id="email" required class="w-full flex rounded-sm">
            
                <br>
                <label for="password" class=" text-gray-500 block my-2 text-sm" >Password</label>
                <input type="password" name="password" id="password" required class="w-full px-2 flex rounded-sm">
                <br>
                <div class=" container items-center my-5">
                <input type="submit" value="Login" class="  bg-gray-500  hover:bg-gray-800 text-sm flex w-full justify-center px-2 rounded-md border border-transparent ">
                </div>
                @error('email') 
                    <p class="error ">{{ $message }}</p> 
                @enderror
            </form>

    </div>
    
</div>
           
        
@endsection