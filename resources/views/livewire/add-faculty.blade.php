
<div class="flex items-center justify-center p-2 bg-white dark:bg-gray-700">


        <form wire:submit.prevent="saveFaculty" method="POST" class=" w-full flex flex-col py-2 px-1
        ">
            @csrf
            <label>Name</label>
            <input type="text" wire:model="name" id="name" class="form-control  shadow-inner dark:shadow-blue-600 shadow-blue-600  rounded-lg h-8 mb-3  focus:outline-none dark:bg-gray-600 bg-smokeywhite">
            @error('name')
                <p class="error text-red-500">{{ $message }}</p>
            @enderror

            <label>Email</label>
            <input type="text" wire:model="email" id="email" class="form-control  shadow-inner dark:shadow-blue-600 shadow-blue-600  rounded-lg h-8 mb-3  focus:outline-none dark:bg-gray-600 bg-smokeywhite">
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
            <label>Password</label>
            <input type="text" wire:model="password" id="password" class="form-control  shadow-inner dark:shadow-blue-600 shadow-blue-600  rounded-lg h-8 mb-3  focus:outline-none dark:bg-gray-600 bg-smokeywhite">
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror
            <label>Role</label>
            <select wire:model="role" id="role" class=" shadow-inner dark:shadow-blue-600 shadow-blue-600  rounded-lg h-8 mb-3  focus:outline-none  dark:bg-gray-600 bg-smokeywhite">
                <option class=""value="">--Select a Role--</option>
                <option class=""value="faculty">Faculty</option>
                <option class=""value="admin">Admin</option>
            </select>

            <label>Tag Id</label>
            <input type="text" wire:model="tag_id" id="tag_id" class="form-control  shadow-inner dark:shadow-blue-600 shadow-blue-600  rounded-lg h-8 mb-3  focus:outline-none dark:bg-gray-600 bg-smokeywhite">
            @error('tag_id')
                <p class="error">{{ $message }}</p>
            @enderror
            <label>Permissions</label>
            <input type="text" wire:model="permissions" id="permissions" class="form-control  shadow-inner dark:shadow-blue-600 shadow-blue-600  rounded-lg h-8 mb-3  focus:outline-none dark:bg-gray-600 bg-smokeywhite">
            @error('permissions')
                <p class="error">{{ $message }}</p>
            @enderror
            <div class="flex items-center justify-center">
                <input type="submit"  value="Save" class="btn btn-success text-white !important bg-blue-500 w-14 h-7 rounded-lg ">

            </div>
           
</div>