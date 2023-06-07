<div>
    <div class="p-5 bg-yellow-300">
        <div class="flex w-full gap-2">
            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">Start Time</label>
                <input type="time" class=" rounded p-2 shadow-inner text-black shadow-yellow-500 "
                    wire:model="start_time">
                @error('start_time')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">End Time</label>
                <input type="time" class=" rounded p-2 shadow-inner text-black shadow-yellow-500"
                    wire:model="end_time">
                @error('end_time')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror

            </div>
        </div>

        <div class="flex flex-col mb-3 grow">
            <label class="mb-2">Day</label>
            <select class=" rounded p-2 shadow-inner text-black shadow-yellow-500" wire:model="days">
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
            </select>
            @error('days')
                <span class="text-red-400 text-sm py-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex w-full gap-2">
            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">School Year</label>
                <select class=" rounded p-2 shadow-inner text-black shadow-yellow-500" wire:model="school_year">
                    <option value="2022-2023">2022-2023</option>
                </select>
                @error('school_year')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror

            </div>

            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">Semester</label>
                <select class=" rounded p-2 shadow-inner text-black shadow-yellow-500" wire:model="semester">
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                </select>
                @error('semester')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror

            </div>
        </div>

        <div class="flex flex-col mb-3 grow">
            <label class="mb-2">Faculty ID</label>
            <input class=" rounded p-2 shadow-inner text-black shadow-yellow-500" type="number" value="1"
                min="1" max="2" wire:model="faculty_id">
            @error('faculty_id')
                <span class="text-red-400 text-sm py-1">{{ $message }}</span>
            @enderror

        </div>
        <div class="flex flex-col mb-3 grow">
            <label class="mb-2">Lab</label>
            <select class=" rounded p-2 shadow-inner text-black shadow-yellow-500" wire:model="laboratory">
                <option value="lab1">Lab 1</option>
                <option value="lab2">Lab 2</option>
            </select>
            @error('laboratory')
                <span class="text-red-400 text-sm py-1">{{ $message }}</span>
            @enderror

        </div>
        <button type="submit" class="w-full rounded p-2 text-white bg-blue-500 hover:bg-blue-700 mt-2"
            wire:click="addSched">Submit</button>
    </div>
</div>
