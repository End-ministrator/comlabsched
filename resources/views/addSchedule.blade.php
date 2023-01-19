@extends ('layouts.main')
@section('title', 'Add Schedule')
@section('content')
<h1>Add Schedule</h1>
@if(Session::has('success'))
<div role="alert">
    {{Session::get('success')}}
</div>
@endif
    <form method="post" action="{{url('saveSchedule')}}"class="bg-green-600 align-middle">
        @csrf
        <label for="start_time" class="text-red-700 pl-7 ">Start Time</label>
        <input type="time" name="start_time" id="start_time" required >
        <br>
        <label for="end_time" class="text-red-700" >End Time</label>
        <input type="time" name="end_time" id="end_time" required >
        <br>
        <label for="days" class="text-red-700 pl-7 ">Day</label>
        <select name="days" id="days">
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
        </select>
        <br>
        <label for="faculty_id" class="text-red-700" >Faculty ID</label>
        <input type="number" name="faculty_id" id="faculty_id" value="1" min="1" max="2"required>
        <br>
        <label for="laboratory" class="text-red-700 pl-7 ">Lab</label>
        <select id="laboratory" name="laboratory">
            <option value="lab1">Lab 1</option>
            <option value="lab2">Lab 2</option>
        </select>
        <br>
        <button type="submit" class="text-yellow-400">Submit</button>
        <button><a href="{{url('/dashboard')}}">Back</a></button>
    </form>
@endsection