
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

            <div class="flex flex-col mb-3 grow relative">
                <label class="mb-2">User ID</label>
                <input type="text" id="userSearch" class="rounded p-2 shadow-inner text-black bg-smokeywhite" placeholder="Search User">
                <div id="userOptions" class="rounded p-2 shadow-inner text-black bg-smokeywhite absolute top-full left-0 w-full hidden overflow-y-auto max-h-40">
                    @foreach ($schedules as $schedule)
                        @if ($schedule['role'] === 'Faculty')
                            <div wire:click="$set('user_id', '{{ $schedule['id'] }}'); document.getElementById('userSearch').placeholder = '{{ $schedule['firstname'] . ' ' . $schedule['lastname'] }}'" class="cursor-pointer p-2 hover:bg-gray-100">{{ $schedule['firstname'] . ' ' . $schedule['lastname'] }}</div>
                        @endif
                    @endforeach
                </div>
                @error('user_id')
                    <p class="error text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>





        <div class="flex flex-col mb-3 grow">
            <label class="mb-2">Date</label>
            <input type="date" wire:model="date" id="date"
                class=" rounded p-2 shadow-inner text-black bg-smokeywhite ">
                @error('date')
                    <script>displayToastr('error', "{{ $message }}")</script>
                @enderror
        </div>

        <div class="flex w-full gap-2">
            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">Start Time</label>
                <input type="time" class=" rounded p-2 shadow-inner text-black  bg-smokeywhite"
                    wire:model="start_time">
                    @error('start_time')
                        <script>displayToastr('error', "{{ $message }}")</script>
                    @enderror
            </div>

            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">End Time</label>
                <input type="time" class=" rounded p-2 shadow-inner text-black bg-smokeywhite" wire:model="end_time">
                @error('end_time')
                    <script>displayToastr('error', "{{ $message }}")</script>
                @enderror

            </div>
        </div>

        <div class="flex w-full gap-2">
            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">Recurrence</label>
                <select id="recurrenceInput" class=" rounded p-2 shadow-inner text-black bg-smokeywhite"
                    wire:model="recurrence">
                    <option hidden value="">Select Recurrence</option>
                    <option value="none">None</option>
                    <option value="daily">Daily</option>
                    <option value="weekly">Weekly</option>
                </select>
                @error('recurrence')
                    <span class="text-red-400 text-sm py-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col mb-3 grow">
                <label class="mb-2">Recurrence Value</label>
                <input id="recurrenceValueInput" type="text"
                    class=" rounded p-2 shadow-inner text-black bg-smokeywhite" wire:model="recurrence_value"
                    @if ($recurrence === 'none') disabled @endif>
                @error('recurrence_value')
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
        <div class="flex items-center justify-center">
            <div class="w-full my-2 space-x-3 flex justify-end pr-7">

                <button id="addRefresh" type="submit" wire:click="addSched" class="btn btn-success  closeModal bg-blue-500 w-20 h-8 text-white rounded-lg !important">Submit</button></br>

                <button wire:click="closeModal" id="closeRefresh"
                    class="rounded-lg border  border-blue-700 w-20 h-8">Close</button>
            </div>
        </div>
    </div>
</div>

<script>

window.livewire.on('updateShowFaculty', () => {
    location.reload();
});


// Faculty Search and other code...

// Add event listener to the "Add" button

    // Faculty Search
    var userSearchInput = document.getElementById('userSearch');
    var userOptions = document.getElementById('userOptions');
    var userOptionsItems = userOptions.getElementsByTagName('div');

    userSearchInput.addEventListener('input', function() {
        var searchText = userSearchInput.value.toLowerCase();

        for (var i = 0; i < userOptionsItems.length; i++) {
            var option = userOptionsItems[i];
            var optionText = option.textContent.toLowerCase();

            if (optionText.includes(searchText)) {
                option.style.display = 'block';
            } else {
                option.style.display = 'none';
            }
        }

        userOptions.style.display = 'block';
        clearSelectedOption();
    });

    userSearchInput.addEventListener('click', function() {
        userOptions.style.display = 'block';
        clearSelectedOption();
    });

    userSearchInput.addEventListener('input', function() {
        clearSelectedOption();
    });

    document.addEventListener('click', function(event) {
        var target = event.target;

        if (!target.closest('#userSearch') && !target.closest('#userOptions')) {
            userOptions.style.display = 'none';
        }
    });

    function clearSelectedOption() {
        var selectedOption = userOptions.querySelector('.selected');

        if (selectedOption) {
            selectedOption.classList.remove('selected');
        }

        userSearchInput.placeholder = 'Search User';
    }

    // Highlight selected option
    userOptions.addEventListener('click', function(event) {
        var target = event.target;

        if (target.tagName === 'DIV') {
            var selectedOption = userOptions.querySelector('.selected');

            if (selectedOption) {
                selectedOption.classList.remove('selected');
            }

            target.classList.add('selected');
            userSearchInput.value = target.textContent; // Set the input value to the selected option
            userOptions.style.display = 'none';
        }
    });

    // Check if there is a selected option on page load
    var selectedOption = userOptions.querySelector('.selected');

    if (selectedOption) {
        userSearchInput.value = selectedOption.textContent;
    }
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

