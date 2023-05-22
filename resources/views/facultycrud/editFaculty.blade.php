@extends('layouts.main')

@section('title', 'Department Head | Dashboard')

@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Student</div>
        <div class="card-body">

            <form action="{{ url('faculty/' . $faculties->id) }}" method="post">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $faculties->id }}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $faculties->name }}"
                    class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="email" value="{{ $faculties->email }}" class="form-control"></br>
                <label>Password</label></br>
                <input type="text" name="password" id="password" value="{{ $faculties->password }}" class="form-control"></br>
                <label>Role</label></br>
                <select name="role" id="role" value="{{ $faculties->role }}">
                    <option value="faculty">Faculty</option>
                    <option value="admin">Admin</option>
                </select></br>
                <label>Tag Id</label></br>
                <input type="text" name="tag_id" id="tag_id" value="{{ $faculties->tag_id }}" class="form-control"></br>
                <label>Permissions</label></br>
                <input type="text" name="permissions" id="permissions" value="{{ $faculties->permissions }}" class="form-control"></br>

                <button type="submit" value="Update" class="btn btn-success">Update</button></br>
            </form>

        </div>
    </div>

@endsection
