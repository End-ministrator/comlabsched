@extends('layouts.main')

@section('title', 'Department Head | Dashboard')

@section('content')

 <div id= 'Cmodal' class="w-1/3 h-3/4 bg-yellow-300 rounded-md justify-center items-center flex flex-col">
        <form action="{{ url('faculty/' . $item->id) }}" method="post">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $item->id }}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $item->name }}"
                    class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email" id="email" value="{{ $item->email }}" class="form-control"></br>
                <label>Password</label></br>
                <input type="text" name="password" id="password" value="{{ $item->password }}" class="form-control"></br>
                <label>Role</label></br>
                <select name="role" id="role" value="{{ $item->role }}">
                    <option value="faculty">Faculty</option>
                    <option value="admin">Admin</option>
                </select></br>
                <label>Tag Id</label></br>
                <input type="text" name="tag_id" id="tag_id" value="{{ $item->tag_id }}" class="form-control"></br>
                <label>Permissions</label></br>
                <input type="text" name="permissions" id="permissions" value="{{ $item->permissions }}" class="form-control"></br>

                <button type="submit" value="Update" class="btn btn-success">Update</button></br>
    </form>
 </div>

 
@endsection



