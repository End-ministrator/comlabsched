
<div class="flex bg-white dark:bg-gray-700 flex-col justify-center items-center p-1">
<!-- <span class="text-center w-full flex text-3xl ">Edit Faculty</span> -->


        <form wire:submit.prevent="editFaculty" method="post" class="w-full flex flex-col px-2">
            @csrf
            <input type="hidden" value="{{ $facultyId }}" wire:model="faculty_id" />

            <label>Name</label>
            <input type="text" wire:model="name" class="form-control  shadow-inner dark:shadow-blue-600 shadow-blue-600  rounded-lg h-8 mb-3 pl-1 bg-smokeywhite dark:bg-gray-600">

            <label>Email</label>
            <input type="text" wire:model="email" class="form-control  shadow-inner dark:shadow-blue-600 shadow-blue-600  rounded-lg h-8 mb-3 pl-1 bg-smokeywhite dark:bg-gray-600">

            <label>Password</label>
            <input type="text" wire:model="password" class="form-control  shadow-inner dark:shadow-blue-600 shadow-blue-600  rounded-lg h-8 mb-3 pl-1 bg-smokeywhite dark:bg-gray-600">

            <label>Role</label>
            <select wire:model="role" class="form-control  shadow-inner dark:shadow-blue-600 shadow-blue-600 rounded-lg h-8 mb-3 pl-1 bg-smokeywhite dark:bg-gray-600">
                <option value="faculty" class=" border border-l-blue-500">Faculty</option>
                <option value="admin" class=" border border-l-blue-500">Admin</option>
            </select>

            <label>Tag Id</label>
            <input type="text" wire:model="tag_id" class="form-control  shadow-inner dark:shadow-blue-600 shadow-blue-600 rounded-lg h-8 mb-3 pl-1 bg-smokeywhite dark:bg-gray-600">

            <label>Permissions</label>
            <input type="text" wire:model="permissions" class="form-control  shadow-inner dark:shadow-blue-600 shadow-blue-600 rounded-lg h-8 mb-3 pl-1 bg-smokeywhite dark:bg-gray-600">
            <div class="w-full items-center justify-center flex">
                <button type="submit" class="btn btn-success text-white !important bg-blue-500 dark:bg-blue-700 w-16 h-7 rounded-lg ">Update</button>
            </div>
            
        </form>
       
</div>