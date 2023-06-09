<div>
    <div class="p-5 dark:bg-gray-700 bg-white">
        <div class="flex w-full gap-2">
            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">Title</label>
                <input type="text" wire:model="title" id="title"
                    class=" rounded p-2 shadow-inner text-black bg-smokeywhite ">
                @error('title')
                    <p class="error text-red-500">{{ $message }}</p>
                @enderror

            </div>

            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">User ID</label>
                <input type="text" wire:model="user_id" id="user_id"
                    class=" rounded p-2 shadow-inner text-black bg-smokeywhite ">
                @error('user_id')
                    <p class="error text-red-500">{{ $message }}</p>
                @enderror

            </div>
        </div>
        <div class="flex w-full gap-2">
            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">Start Time</label>
                <input type="datetime-local" class=" rounded p-2 shadow-inner text-black  bg-smokeywhite"
                    wire:model="start_time">
                @error('start_time')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">End Time</label>
                <input type="datetime-local" class=" rounded p-2 shadow-inner text-black bg-smokeywhite"
                    wire:model="end_time">
                @error('end_time')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror

            </div>
        </div>

        <div class="flex w-full gap-2">
            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">School Year</label>
                <select class=" rounded p-2 shadow-inner text-black bg-smokeywhite" wire:model="school_year">
                    <option hidden value="">Select Year</option>
                    <option value="2022-2023">2022-2023</option>
                </select>
                @error('school_year')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror

            </div>

            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">Semester</label>
                <select class=" rounded p-2 shadow-inner text-black bg-smokeywhite" wire:model="semester">
                    <option hidden value="">Select Semester</option>
                    <option value="1st Semester">1st Semester</option>
                    <option value="2nd Semester">2nd Semester</option>
                </select>
                @error('semester')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror

            </div>
        </div>
        <div class="flex flex-col mb-3 grow">
            <label class="mb-2">Lab</label>
            <select class=" rounded p-2 shadow-inner text-black bg-smokeywhite" wire:model="laboratory">
                <option hidden value="">Select Lab</option>
                <option value="lab1" class="bg-smokeywhite">Lab 1</option>
                <option value="lab2" class="bg-smokeywhite">Lab 2</option>
            </select>
            @error('laboratory')
                <span class="text-red-400 text-sm py-1">{{ $message }}</span>
            @enderror

        </div>

        <button type="submit" class="w-full rounded p-2 text-white closeModal bg-blue-500 hover:bg-blue-700 mt-2"
            wire:click="addSched">Submit</button>
    </div>
</div>

<script>
    var closeModals = document.querySelectorAll('.closeModal');

    closeModals.forEach(function(closeModal) {
    closeModal.addEventListener('click', function() {
        setTimeout(function() {
        location.reload();
        }, 15); // Delay of 3 seconds before refreshing
    });
    });
</script>