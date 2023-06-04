<div class="flex bg-white dark:bg-gray-700 flex-col justify-center items-center p-1">
    <!-- <span class="text-center w-full flex text-3xl ">Edit Faculty</span> -->


    <form wire:submit.prevent="editFaculty" method="post" class="w-full flex flex-col">
        @csrf
        <input type="hidden" value="{{ $facultyId }}" wire:model="faculty_id" />

        <label>First Name</label>
        <input type="text" wire:model="firstname" id="firstname"
            class="form-control rounded-lg h-8 mb-3 pl-1 bg-smokeywhite dark:bg-gray-800">
        @error('firstname')
            <p class="error text-red-500">{{ $message }}</p>
        @enderror

        <label>Last Name</label>
        <input type="text" wire:model="lastname" id="lastname"
            class="form-control rounded-lg h-8 mb-3 pl-1 bg-smokeywhite dark:bg-gray-800">
        @error('lastname')
            <p class="error text-red-500">{{ $message }}</p>
        @enderror

        <label>Email</label>
        <input type="text" wire:model="email"
            class="form-control rounded-lg h-8 mb-3 pl-1 bg-smokeywhite dark:bg-gray-800">
        @error('email')
            <p class="error text-red-500">{{ $message }}</p>
        @enderror

        <label>Password</label>
        <input type="text" wire:model="password"
            class="form-control rounded-lg h-8 mb-3 pl-1 bg-smokeywhite dark:bg-gray-800">
        @error('password')
            <p class="error text-red-500">{{ $message }}</p>
        @enderror

        <label>Role</label>
        <select wire:model="role" class="form-control rounded-lg h-8 mb-3 pl-1 bg-smokeywhite dark:bg-gray-800">
            <option value="faculty">Faculty</option>
            <option value="admin">Admin</option>
        </select>
        @error('role')
            <p class="error text-red-500">{{ $message }}</p>
        @enderror

        <label>Tag Id</label>
        <input type="text" wire:model="tag_id"
            class="form-control rounded-lg h-8 mb-3 pl-1 bg-smokeywhite dark:bg-gray-800">
        @error('tag_id')
            <p class="error text-red-500">{{ $message }}</p>
        @enderror


        <label>Permissions</label>
        <input type="text" wire:model="permissions"
            class="form-control rounded-lg h-8 mb-3 pl-1 bg-smokeywhite dark:bg-gray-800">
        @error('permissions')
            <p class="error text-red-500">{{ $message }}</p>
        @enderror

        <div class="w-full items-center justify-end pr-7 my-2 flex space-x-3">
                      <button wire:click="closeModal" class="rounded-lg border border-blue-700 w-20 h-8">Close</button>
            <button type="submit" class="btn btn-success bg-blue-500 w-20 h-8 text-white rounded-lg !important">Update</button>
  
        </div>

    </form>


</div>
