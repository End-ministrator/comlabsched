<div>
    <div class="flex items-center justify-center p-2 bg-white dark:bg-gray-700">
        <form wire:submit.prevent="saveFaculty" method="POST" class=" w-full flex flex-col py-2 px-1
        ">
            @csrf
            <label>First Name</label>
            <input type="text" wire:model="firstname" id="firstname"
                class="form-control text-black rounded-lg h-8 mb-3 shadow-inner shadow-blue-700  focus:outline-none  bg-smokeywhite">
            @error('firstname')
                <p class="error text-red-500">{{ $message }}</p>
            @enderror

            <label>Last Name</label>
            <input type="text" wire:model="lastname" id="lastname"
                class="form-control rounded-lg h-8 mb-3 shadow-inner shadow-blue-700  focus:outline-none  bg-smokeywhite">
            @error('lastname')
                <p class="error text-red-500">{{ $message }}</p>
            @enderror

            <label>Email</label>
            <input type="text" wire:model="email" id="email"
                class="form-control rounded-lg h-8 mb-3 shadow-inner shadow-blue-700  focus:outline-none  bg-smokeywhite">
            @error('email')
                <p class="error text-red-500">{{ $message }}</p>
            @enderror
            <label>Password</label>
            <div class="w-full">
                <input type="password" wire:model="password" id="password" class="form-control pass rounded-lg h-8 mb-3 w-full shadow-inner shadow-blue-700  focus:outline-none  bg-smokeywhite">
                
                <button id="revealpass" type="button" class="text-sm absolute -translate-x-5 text-black translate-y-2"><i class="fa-solid fa-eye"></i></button>
                <button id="hidepass" type="button" class="text-sm hidden absolute -translate-x-5 text-black translate-y-2"><i class="fa-solid fa-eye-slash"></i></button>

            </div>

            @error('password')
                <p class="error text-red-500">{{ $message }}</p>
            @enderror
            <label>Role</label>
            <select wire:model="role" id="role"
                class="rounded-lg h-8 mb-3 shadow-inner shadow-blue-700  focus:outline-none   bg-smokeywhite">
                <option class=""value="">--Select a Role--</option>
                <option class=""value="Faculty">Faculty</option>
                <option class=""value="Admin">Admin</option>
            </select>
            @error('role')
                <p class="error text-red-500">{{ $message }}</p>
            @enderror

            <label>Tag Id</label>
            <input type="text" wire:model="tag_id" id="tag_id"
                class="form-control rounded-lg h-8 mb-3 shadow-inner shadow-blue-700  focus:outline-none bg-smokeywhite">
            @error('tag_id')
                <p class="error text-red-500">{{ $message }}</p>
            @enderror
            <div class="flex items-center justify-center">
                <div class="w-full my-2 space-x-3 flex justify-end pr-7">

                    <button id="addRefresh"type="submit" value="Save"
                        class="btn btn-success  closeModal bg-blue-500 w-20 h-8 text-white rounded-lg !important">Add</button></br>
                        
                    <button wire:click="closeModal" id="closeRefresh"
                        class="rounded-lg border closeModal  border-blue-700 w-20 h-8">Close</button>


                </div>
            </div>

        </form>
    </div>


</div>


<script>
    const revealp = document.getElementById('revealpass');
    const hidep = document.getElementById('hidepass');
    const password = document.querySelector('.pass');
    var closeModals = document.querySelectorAll('.closeModal');


    revealp.addEventListener('click', function(){
        
        revealp.classList.add('hidden');
        hidep.classList.remove('hidden');
        password.type = "text";
    });
    hidep.addEventListener('click', function(){
        revealp.classList.remove('hidden');
        hidep.classList.add('hidden');
        password.type = "password";
    });

    closeModals.forEach(function(closeModal) {
        closeModal.addEventListener('click', function() {
            // Check if any input field is empty or email does not contain "@tup.edu.ph"
            var inputs = document.querySelectorAll(
                'input[type="text"], input[type="time"], select');
            var isEmpty = Array.from(inputs).some(function(input) {
                return input.value.trim() === '';
            });
            var emailInput = document.getElementById('email');
            var isInvalidEmail = !emailInput.value.includes('@tup.edu.ph');

            if (!isEmpty && !isInvalidEmail) {
                setTimeout(function() {
                    location.reload();
                }, 15); // Delay of 3 seconds before refreshing
            }
        });
    });
</script>
