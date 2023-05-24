@extends('layouts.main')

@section('title', 'Department Head | Dashboard')

@section('content')

       <!--  create faculty modal-->

<div id="Cmodal"class=" hidden w-1/3 h-3/4 bg-yellow-300 rounded-md justify-center items-center flex flex-col absolute z-50 inset-y-32 inset-x-1/3    ">
    <form action="{{ url('faculty') }}" method="post" class="space-y-2 w-3/4 ">
        @csrf
        <label class="w-full h-8 rounded-md">Name</label>
        <input class=" input w-full  h-8 rounded-md focus:outline-none shadow-inner text-black shadow-yellow-500 " required type="text" name="name" id="name" class="form-control">

        <label class="w-full h-8 rounded-md">Email</label>

        <input class=" input w-full h-8 rounded-md focus:outline-none shadow-inner text-black shadow-yellow-500" required type="text" name="email" id="email" class="form-control">

        <label class="w-full h-8 rounded-md">Password</label>

        <input class=" input w-full h-8 rounded-md focus:outline-none shadow-inner text-black shadow-yellow-500" required type="text" name="password" id="password" class="form-control">

        <label class="w-full h-8 rounded-md">Role</label>

        <select class="w-full h-8 rounded-md focus:outline-none shadow-inner text-black shadow-yellow-500" required name="role" id="role">
            <option value="faculty">Faculty</option>
            <option value="admin">Admin</option>
        </select>

        <label class="w-full h-8 rounded-md">Tag Id</label>

        <input class=" input w-full h-8 rounded-md focus:outline-none shadow-inner text-black shadow-yellow-500" required type="text" name="tag_id" id="tag_id" class="form-control">

        <label class="w-full h-8 rounded-md">Permissions</label>

        <input class="w-full input h-8 rounded-md focus:outline-none shadow-inner text-black shadow-yellow-500" required type="text" name="permissions" id="permissions" class="form-control">
        <div class="w-full flex justify-end">
            <input class="w-16 h-8 rounded-md    " id="save"type="submit" value="Save" class="btn btn-success">
        </div>      
                
                
                
    </form>
    <div class="w-3/4 flex justify-start ml-2 ">
        <button id="cancel"   class="relative -inset-y-7">Cancel</button>
    </div>
            
</div>


    
    <!-- edit faculty modal -->

    


    
<div class="flex flex-row bg-smokeywhite" id="body">

        <div class=" flex">
            <x-nav-bar />
            <!--  -->
        </div>

        <div class=" lg:ml-x sm:ml-xsm  md:ml-xmd ml-xsm  flex-col w-full h-screen items-center flex   ">
            <x-topbar />
            <!-- main content goes here -->

    
       



      
    

            <div class="flex flex-col justify-center  w-11/12 h-85p pb-8 pt-4 pl-4 pr-4 my-8 bg-white  shadow shadow-black  rounded-lg ">
                <div class="flex flex-row justify-between">
                     

                    <button  class="btn btn-success btn-sm flex justify-center items-center  border ml-14 mt-8 rounded-md  border-black w-28 h-10" id="addfaculty"
                            title="Add New Faculty">
                            <span class="text-lg">Add Faculty</span>
                    </button>
                    <div class=" flex   text-gray-600 ml-8 mt-8 mr-12">
                        <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                                type="search"
                                name="search"
                                placeholder="Search">
                        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">

                        </button>
                    </div>
                </div>
                <div class="row bg-white  shadow shadow-black w-11/12 h-full rounded-lg  overflow-x-auto ml-14 mt-10">

                    <div class="table-responsive flex justify-center items-center   ">
                        <table id="tableko" class=" w-full  rounded-lg  border-spacing-3  p-10 font-medium">
                            <thead class="  sticky top-0 ">
                                <tr class="h-12 bg-green-500">
                                    <th class="">#</th>
                                    <th class="">Name</th>
                                    <th class="">Email</th>
                                    <th class="">Password</th>
                                    <th class="">Role</th>
                                    <th class="">Tag Id</th>
                                    <th class="">Action</th>
                                </tr>
                            </thead>
                            <tbody class=" ">
                                @foreach ($faculties as $item)
                                    <tr class="h-12 ">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $item->name }}</td>
                                        <td class="text-center">{{ $item->email }}</td>
                                        <td class="text-center">{{ $item->password }}</td>
                                        <td class="text-center">{{ $item->role }}</td>
                                        <td class="text-center">{{ $item->tag_id }}</td>
                                        <td class="text-center">

                                            <a href="{{ url('/faculty/' . $item->id . '/edit') }}"
                                                title="Edit Student">
                                                <button class="btn btn-primary btn-sm"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>|
                                                    
                                                </button></a>

                                            <form method="POST" action="{{ url('/faculty/' . $item->id) }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    title="Delete Student"
                                                    onclick="return confirm('Confirm delete?')">
                                                    |<i class="fa fa-trash-o" aria-hidden="true"></i> 
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


 


    
            <!-- main content ends here -->
        </div>

</div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const table = document.getElementById('tableko');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                if (i % 2 === 0) {
                    rows[i].classList.add('bg-reddishyellow');
                    rows[i+1].classList.add('bg-white');
                } else {
                    rows[i].classList.remove('bg-reddishyellow');
                    rows[i+1].classList.remove('bg-white');
                }
            }
        });

        const inputs = document.querySelectorAll('input');
        const button = document.getElementById('addfaculty');
        const bg = document.getElementById('body');
        const nav = document.getElementById('nav');
        const Cmodal = document.getElementById('Cmodal');
        const cancel = document.getElementById('cancel');
        const save = document.getElementById('save');
        var f;
        button.addEventListener('click', function() {
        bg.classList.add('brightness-50');
        nav.classList.add('brightness-50');
        Cmodal.classList.remove('hidden');
        Cmodal.classList.add('block');
        console.log('clicked')
        });
        cancel.addEventListener('click', function() {
        bg.classList.remove('brightness-50');
        nav.classList.remove('brightness-50');
        Cmodal.classList.add('hidden');
        Cmodal.classList.remove('block');
        console.log('clicked')
        });

        save.addEventListener('click', function() {

            inputs.forEach((input) => {
        if (input.value === '') {
                f=1;
        }
        });
        if(f<1){
        bg.classList.remove('brightness-50');
        nav.classList.remove('brightness-50');
        Cmodal.classList.add('hidden');
        Cmodal.classList.remove('block');
        console.log('clicked')
        }
        
        });

        
   
 
        // document.addEventListener('click', function() {
        // // Click event occurred
        // console.log('Clicked somewhere');
        // if (modal.classList.contains('block')) {
        // modal.classList.add('hidden');
        // modal.classList.remove('block');
        // }else{       
        // modal.classList.remove('hidden');
        // modal.classList.add('block');
        // }
        // });

 
    </script>
@endsection
