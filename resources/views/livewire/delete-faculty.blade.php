<div class="flex items-center justify-center p-2 bg-white dark:bg-gray-700">
    <h3>Confirm Delete</h3>
    <p>Are you sure you want to delete this faculty?</p></br>

    <button wire:click="deleteFaculty" class="btn btn-danger">Delete</button>
    <button wire:click="$emit('closeModal')" class="btn btn-secondary">Cancel</button>
</div>

