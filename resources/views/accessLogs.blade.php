@extends('layouts.main')
@section('title', 'Access Logs')
@section('content')

<x-topbar/>
<div class="flex flex-row h-screen">
    <x-nav-bar />
    <div class="flex justify center items-center w-full h-screen">
        <!-- Main Content Goes Here -->
        <livewire:log-table theme="tailwind"/>
    </div>
    
</div>

@endsection