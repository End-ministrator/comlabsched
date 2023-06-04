<div class="flex items-center justify-center p-2 bg-white dark:bg-gray-700">


    <form wire:submit.prevent="saveFaculty" method="POST" class=" w-full flex flex-col py-2 px-1
        ">
        @csrf
        <label>First Name</label>
        <input type="text" wire:model="firstname" id="firstname"
            class="form-control rounded-lg h-8 mb-3 shadow-inner shadow-blue-700  focus:outline-none dark:bg-gray-700 bg-smokeywhite">
        @error('firstname')
            <p class="error text-red-500">{{ $message }}</p>
        @enderror

        <label>Last Name</label>
        <input type="text" wire:model="lastname" id="lastname"
            class="form-control rounded-lg h-8 mb-3 shadow-inner shadow-blue-700  focus:outline-none dark:bg-gray-700 bg-smokeywhite">
        @error('lastname')
            <p class="error text-red-500">{{ $message }}</p>
        @enderror

        <label>Email</label>
        <input type="text" wire:model="email" id="email"
            class="form-control rounded-lg h-8 mb-3 shadow-inner shadow-blue-700  focus:outline-none dark:bg-gray-700 bg-smokeywhite">
        @error('email')
            <p class="error text-red-500">{{ $message }}</p>
        @enderror
        <label>Password</label>
        <input type="text" wire:model="password" id="password"
            class="form-control rounded-lg h-8 mb-3 shadow-inner shadow-blue-700  focus:outline-none dark:bg-gray-700 bg-smokeywhite">
        @error('password')
            <p class="error text-red-500">{{ $message }}</p>
        @enderror
        <label>Role</label>
        <select wire:model="role" id="role"
            class="rounded-lg h-8 mb-3 shadow-inner shadow-blue-700  focus:outline-none  dark:bg-gray-700 bg-smokeywhite">
            <option class=""value="">--Select a Role--</option>
            <option class=""value="Faculty">Faculty</option>
            <option class=""value="Admin">Admin</option>
        </select>
        @error('role')
            <p class="error text-red-500">{{ $message }}</p>
        @enderror

        <label>Tag Id</label>
        <input type="text" wire:model="tag_id" id="tag_id"
            class="form-control rounded-lg h-8 mb-3 shadow-inner shadow-blue-700  focus:outline-none dark:bg-gray-700 bg-smokeywhite">
        @error('tag_id')
            <p class="error text-red-500">{{ $message }}</p>
        @enderror
        {{-- <label>Permissions</label>
        <input type="text" wire:model="permissions" id="permissions"
            class="form-control rounded-lg h-8 mb-3 shadow-inner shadow-blue-700  focus:outline-none dark:bg-gray-700 bg-smokeywhite">
        @error('permissions')
            <p class="error text-red-500">{{ $message }}</p>
        @enderror --}}
        <div class="flex items-center justify-center">
            

            <button type="submit" value="Save" class="btn btn-success bg-blue-500 w-14 h-7 rounded-lg ">Add</button></br>
            <button wire:click="closeModal">Close</button>
    </form>



</div>
</div>
