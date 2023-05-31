@extends('layouts.main')

@section('title', 'Department Head | Faculty')

@section('content')

<livewire:show-faculty :faculties="$faculties"/>

@endsection
