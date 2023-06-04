@extends('layouts.main')

@section('title', 'Department Head | Dashboard')

@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New Faculty</div>
        <div class="card-body">

            <form action="{{ url('faculty') }}" method="post">
                @csrf
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="email" class="form-control"></br>
                <label>Password</label></br>
                <input type="text" name="password" id="password" class="form-control"></br>
                <label>Role</label></br>
                <select name="role" id="role">
                    <option value="faculty">Faculty</option>
                    <option value="admin">Admin</option>
                </select></br>
                <label>Tag Id</label></br>
                <input type="text" name="tag_id" id="tag_id" class="form-control"></br>
                {{-- <label>Permissions</label></br>
                <input type="text" name="permissions" id="permissions" class="form-control"></br> --}}
                
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@endsection
