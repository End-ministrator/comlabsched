<div class="bg-white  h-full lg:w-60 md:w-48 w-44 flex flex-col justify-between  rounded-none shadow-md shadow-black ">
    <div class="flex flex-col space-y-6 sm:space-y-6 md:space-y-6 lg:space-y-4 text-lg font-semibold mt-10 ">
        <button
            class="w-5/6 grid hover:bg-gray-200 rounded-md z-0 hover:inset-x-3 transition-all duration-300 py-1 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1  -space-x-6 items-center relative group"><i
                class="fa-solid fa-house mr-2 "></i><a href="{{ route('dashboard') }}"
                class="justify-self-start sm:hidden md:hidden lg:block hidden">Dashboard</a></button>
        <button
            class="w-5/6 grid hover:bg-gray-200 rounded-md z-0 hover:inset-x-3 transition-all duration-300 py-1 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1  -space-x-6 items-center relative group"><i
                class="fa-solid fa-magnifying-glass mr-2  "></i><a href="#"
                class="justify-self-start sm:hidden md:hidden lg:block hidden">Monitoring</a></button>

        <button
            class="w-5/6 grid hover:bg-gray-200 rounded-md z-0 hover:inset-x-3 transition-all duration-300 py-1 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1  -space-x-6 items-center relative group"><i
                class="fa-solid fa-clipboard-list mr-2  "><a href="{{ route('logs') }}"
                    class="justify-self-start sm:hidden md:hidden lg:block hidden"></i>Logs</a></button>
        <button
            class="w-5/6 grid hover:bg-gray-200 rounded-md z-0 hover:inset-x-3 transition-all duration-300 py-1 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1  -space-x-6 items-center relative group"><i
                class="fa-solid fa-gear mr-2  "></i><a href="#"
                class="justify-self-start sm:hidden md:hidden lg:block hidden">Settings</a></button>
    </div>
    <div class=" flex flex-col text-lg font-semibold mb-10 justify-center">

        <button
            class="w-5/6 grid hover:bg-gray-200 rounded-md hover:inset-x-3 transition-all duration-300 py-1 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 -space-x-6 items-center relative group"><i
                class="fa-solid fa-arrow-right-from-bracket mr-2"></i><a href="{{ route('logout') }}"
                class="justify-self-start sm:hidden md:hidden lg:block hidden">Log Out</a></button>
    </div>
</div>
