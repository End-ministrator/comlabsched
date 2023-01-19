@extends('layouts.main')
{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
@section('title', 'Log In')

@section('content')
<div class="flex justify-center mb-60">
    <div class="flex justify-center mt-40 bg-zinc-500 w-80 h-45 py-5 rounded-md">
        <div class=" h-60 w-60 flex flex-col justify-center">
            <form action="/login" method="post" class="">
                @csrf
                <label for="email" class=" text-gray-300 block my-2 text-sm">Email</label>
                <input type="email" name="email" id="email" required class="w-full">
            
                <br>
                <label for="password" class=" text-gray-300 block my-2 text-sm" >Password</label>
                <input type="password" name="password" id="password" required class="w-full px-2">
                <br>
                <div class=" container items-center my-5">
                <input type="submit" value="Login" class="  bg-cyan-500  hover:bg-cyan-800 text-sm flex w-full justify-center px-2 rounded-md border border-transparent bg-red-500">
                </div>
                @error('email') 
                    <p class="error ">{{ $message }}</p> 
                @enderror
            </form>
        </div>
    </div>
</div>
@endsection