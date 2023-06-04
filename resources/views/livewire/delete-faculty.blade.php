<div class="flex w-full h-full items-center justify-center p-2 bg-white dark:bg-gray-700">
    <div class="flex w-full h-full flex-col p-3">
        <h3>Confirm Delete</h3>
        <p>Are you sure you want to delete this faculty?</p></br>
        <div class="flex w-full justify-end pr-4 pb-4 space-x-3">
            <button wire:click="$emit('closeModal')" class="btn btn-secondary w-20 h-8 rounded-lg border border-blue-700">Cancel</button>
            <button wire:click="deleteFaculty" class="btn btn-danger w-20 h-8 rounded-lg bg-blue-700 text-white !important">Delete</button>
            
        </div>
    </div>
</div>

