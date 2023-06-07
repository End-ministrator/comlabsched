@extends('layouts.main')

@section('title', 'Department Head | Dashboard')

@section('content')

    <div id='Cmodal' class="w-1/3 h-3/4 bg-yellow-300 rounded-md justify-center items-center flex flex-col">
        <form action="{{ url('faculty/' . $faculties->id) }}" method="post">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{ $faculties->id }}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{ $faculties->name }}" class="form-control"></br>
            <label>Email</label></br>
            <input type="text" name="email" id="email" value="{{ $faculties->email }}" class="form-control"></br>
            <label>Password</label></br>
            <input type="text" name="password" id="password" value="{{ $faculties->password }}"
                class="form-control"></br>
            <label>Role</label></br>
            <select name="role" id="role" value="{{ $faculties->role }}">
                <option value="faculty">Faculty</option>
                <option value="admin">Admin</option>
            </select></br>
            <label>Tag Id</label></br>
            <input type="text" name="tag_id" id="tag_id" value="{{ $faculties->tag_id }}" class="form-control"></br>

            <button type="submit" value="Update" class="btn btn-success">Update</button></br>
        </form>
    </div>
    {{-- <div
        id="editmodal"class=" hidden w-1/3 h-3/4 bg-yellow-300 rounded-md justify-center items-center flex flex-col absolute z-50 inset-y-32 inset-x-1/3    ">
        <form action="{{ url('faculty/' . $item->id) }}" method="post">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" id="id" value="{{  $item->id }}" id="id" />
            <label>Name</label></br>
            <input class=" input w-full  h-8 rounded-md focus:outline-none shadow-inner text-black shadow-yellow-500 "
                type="text" name="name" id="name" value="{{  $item->name }}"
                class="form-control"></br>
            <label>Email</label></br>
            <input class=" input w-full h-8 rounded-md focus:outline-none shadow-inner text-black shadow-yellow-500"
                type="text" name="email" id="email" value="{{  $item->email }}"
                class="form-control"></br>
            <label>Password</label></br>
            <input class=" input w-full h-8 rounded-md focus:outline-none shadow-inner text-black shadow-yellow-500"
                type="text" name="password" id="password" value="{{  $item->password }}"
                class="form-control"></br>
            <label>Role</label></br>
            <select class="w-full h-8 rounded-md focus:outline-none shadow-inner text-black shadow-yellow-500"
                name="role" id="role" value="{{ $item->role }}">
                <option value="faculty">Faculty</option>
                <option value="admin">Admin</option>
            </select></br>
            <label>Tag Id</label></br>
            <input class=" input w-full h-8 rounded-md focus:outline-none shadow-inner text-black shadow-yellow-500"
                type="text" name="tag_id" id="tag_id" value="{{  $item->tag_id }}"
                class="form-control"></br>

            <button id="update" type="submit" value="Update" class="btn btn-success">Update</button></br>
        </form>

        <div class="w-3/4 flex justify-start ml-2  ">
            <button id="cancel" class="relative h-7 -inset-y-7 bg-yellow-500 w-16 rounded-md">Cancel</button>
        </div>
    </div> --}}


@endsection
