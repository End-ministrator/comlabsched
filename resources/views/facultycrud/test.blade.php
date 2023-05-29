@extends('layouts.main')

@section('title', 'Department Head | Faculty')

@section('content')

<livewire:show-faculty :faculty="$faculties"/>
@endsection