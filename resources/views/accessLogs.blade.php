@extends('layouts.main')
@section('title', 'Access Logs')
@section('content')






<div class="flex flex-row">

    <div class=" flex">
        <x-nav-bar/>
        <!--  -->
    </div>

    <div class=" lg:ml-x sm:ml-xsm  md:ml-xmd ml-xsm  flex-col w-full ">
            <x-topbar/>
            <!-- main content goes here -->
            <div class="flex justify-center items-center h-screen w-full">
                <livewire:log-table theme="tailwind"/>
            </div>
            
                

    
    </div>

</div>


@endsection