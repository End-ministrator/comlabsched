
<div class="flex items-center justify-center p-2 bg-yellow-400 dark:bg-amber-500">


        <form wire:submit.prevent="saveFaculty" method="POST" class=" w-full flex flex-col py-2 px-1
        ">
            @csrf
            <label>Name</label>
            <input type="text" wire:model="name" id="name" class="form-control rounded-lg h-8 mb-3 shadow-inner shadow-yellow-400  focus:outline-none">
            @error('name')
                <p class="error text-red-500">{{ $message }}</p>
            @enderror

            <label>Email</label>
            <input type="text" wire:model="email" id="email" class="form-control rounded-lg h-8 mb-3 shadow-inner shadow-yellow-400  focus:outline-none">
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
            <label>Password</label>
            <input type="text" wire:model="password" id="password" class="form-control rounded-lg h-8 mb-3 shadow-inner shadow-yellow-400  focus:outline-none">
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror
            <label>Role</label>
            <select wire:model="role" id="role" class="rounded-lg h-8 mb-3 shadow-inner shadow-yellow-400  focus:outline-none ">
                <option value="faculty">Faculty</option>
                <option value="admin">Admin</option>
            </select>

            <label>Tag Id</label>
            <input type="text" wire:model="tag_id" id="tag_id" class="form-control rounded-lg h-8 mb-3 shadow-inner shadow-yellow-400  focus:outline-none">
            @error('tag_id')
                <p class="error">{{ $message }}</p>
            @enderror
            <label>Permissions</label>
            <input type="text" wire:model="permissions" id="permissions" class="form-control rounded-lg h-8 mb-3 shadow-inner shadow-yellow-400  focus:outline-none">
            @error('permissions')
                <p class="error">{{ $message }}</p>
            @enderror
            <div class="flex items-center justify-center">
                <input type="submit"  value="Save" class="btn btn-success bg-yellow-500 w-14 h-7 rounded-lg "></br>

            </div>
            
        </form>
</div>