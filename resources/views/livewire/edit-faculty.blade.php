<div class="card" style="margin:20px;">
    <div class="card-header">Edit Faculty</div>
    <div class="card-body w-1/3 h-3/4 bg-yellow-300 rounded-md justify-center items-center flex flex-col">

        <form wire:submit.prevent="editFaculty" method="post">
            @csrf
            <input type="hidden" value="{{ $facultyId }}" wire:model="faculty_id" />

            <label>Name</label><br>
            <input type="text" wire:model="name" class="form-control"><br>

            <label>Email</label><br>
            <input type="text" wire:model="email" class="form-control"><br>

            <label>Password</label><br>
            <input type="text" wire:model="password" class="form-control"><br>

            <label>Role</label><br>
            <select wire:model="role" class="form-control">
                <option value="faculty">Faculty</option>
                <option value="admin">Admin</option>
            </select><br>

            <label>Tag Id</label><br>
            <input type="text" wire:model="tag_id" class="form-control"><br>

            <label>Permissions</label><br>
            <input type="text" wire:model="permissions" class="form-control"><br>

            <button type="submit" class="btn btn-success">Update</button><br>
        </form>


    </div>
</div>
