@extends('layouts.main')

@section('title', 'Department Head | Schedule')

@section('content')

<livewire:show-schedule :schedules="$schedules"/>

@endsection
