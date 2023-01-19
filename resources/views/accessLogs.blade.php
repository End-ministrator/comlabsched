@extends('layouts.main')
@section('title', 'Access Logs')
@section('content')
<x-nav-bar />

<livewire:log-table theme="tailwind"/>
@endsection