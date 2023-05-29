<div class="card" style="margin:20px;">
    <div class="card-header">Create New Faculty</div>
    <div class="card-body">

        <form wire:submit.prevent="save" method="POST">
            @csrf
            <label>Name</label></br>
            <input type="text" wire:model="name" id="name" class="form-control"></br>
            @error('name')
                <p class="error text-red-500">{{ $message }}</p>
            @enderror

            <label>Email</label></br>
            <input type="text" wire:model="email" id="email" class="form-control"></br>
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
            <label>Password</label></br>
            <input type="text" wire:model="password" id="password" class="form-control"></br>
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror
            <label>Role</label></br>
            <select wire:model="role" id="role">
                <option value="faculty">Faculty</option>
                <option value="admin">Admin</option>
            </select></br>
            @error('role')
                <p class="error">{{ $message }}</p>
            @enderror
            <label>Tag Id</label></br>
            <input type="text" wire:model="tag_id" id="tag_id" class="form-control"></br>
            @error('tag_id')
                <p class="error">{{ $message }}</p>
            @enderror
            <label>Permissions</label></br>
            <input type="text" wire:model="permissions" id="permissions" class="form-control"></br>
            @error('permissions')
                <p class="error">{{ $message }}</p>
            @enderror

            <input type="submit" wire:click="save" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>
