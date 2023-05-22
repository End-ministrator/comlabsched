@extends('layouts.main')

@section('title', 'Department Head | Dashboard')

@section('content')
    <div class="flex flex-row">

        <div class=" flex">
            <x-nav-bar />
            <!--  -->
        </div>

        <div class=" lg:ml-x sm:ml-xsm  md:ml-xmd ml-xsm  flex-col w-full h-screen  ">
            <x-topbar />
            <!-- main content goes here -->
            <div class="container">
                <div class="row" style="margin:20px;">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ url('/faculty/create') }}" class="btn btn-success btn-sm"
                                    title="Add New Faculty">
                                    Add Faculty
                                </a>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Role</th>
                                                <th>Tag Id</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($faculties as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->password }}</td>
                                                    <td>{{ $item->role }}</td>
                                                    <td>{{ $item->tag_id }}</td>
                                                    <td>

                                                        <a href="{{ url('/faculty/' . $item->id . '/edit') }}"
                                                            title="Edit Student">
                                                            <button class="btn btn-primary btn-sm"><i
                                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                                Edit
                                                            </button></a>

                                                        <form method="POST" action="{{ url('/faculty/' . $item->id) }}"
                                                            accept-charset="UTF-8" style="display:inline">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                title="Delete Student"
                                                                onclick="return confirm('Confirm delete?')">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                            </button>
                                                        </form>


                                                    </td>


                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>



@endsection
