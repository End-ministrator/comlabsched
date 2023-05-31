<!-- <div>
    <nav class="flex p-5 w-full bg-zinc-500 justify-between">
        <h1 class="text-yellow-300">LABSCHED</h1>
        <ul class="flex">
            @if (auth()->user()->role == 'department head')
<li class="mr-5"><a class="text-white" href="#">Schedules</a></li>
                <li class="mr-5"><a class="text-white" href="#">Faculties</a></li>
                <li class="mr-5"><a class="text-white" href="{{ route('logs') }}">Logs</a></li>
@endif
            <li class="mr-5"><a class="text-white" href="{{ route('dashboard') }}">Monitoring</a></li>
            <li class="mr-5"><a class="text-white" href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </nav>
</div> -->

</script>
<aside id="nav"
    class="   bg-blue-600 dark:bg-blue-700 h-screen lg:w-52 md:w-40 w-24 z-50 flex flex-col justify-between  rounded-none shadow-sm shadow-black fixed">
    <div id=""class="flex flex-col space-y-8 sm:space-y-6 md:space-y-6 lg:space-y-4 text-lg   mt-10 relative ">
        <a href="" id="logo"
            class="flex items-center space-x-2 -ml-1 sm:ml-0 md:ml-3 lg:ml-8 transition-opacity lg:-translate-x-2 lg:opacity-0 md:opacity-0 sm:opacity-100 opacity-100 translate-x-10 ">
            <i class="fa-solid fa-cube text-3xl"></i>
            <span
                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white lg:opacity-100 md:opacity-100 sm:opacity-0 opacity-0">LOGO</span>
        </a>
        <a href="{{ route('dashboard') }}" id="menu"
            class="w-5/6 grid rounded-md z-0 hover:inset-x-3 transition-transform duration-300 py-1 lg:grid-cols-2 md:grid-cols-1 md:py-2 sm:py-2 sm:grid-cols-1  -space-x-6 items-center relative group sm:inset-x-0 md:inset-x-1 lg:-inset-x-1 inset-x-0"><i
                class="fa-solid fa-house mr-4 relative lg:inset-x-6 md:translate-x-2 sm:translate-x-2 inset-x-10  "></i><span
                href="{{ route('dashboard') }}"
                class="justify-self-start sm:hidden md:hidden lg:block hidden ">Dashboard</span></a>
        <a href="" id="menu"
            class="w-5/6 grid rounded-md z-0 hover:inset-x-3 transition-transform duration-300 py-1 lg:grid-cols-2 md:grid-cols-1 md:py-2 sm:py-2 sm:grid-cols-1  -space-x-6 items-center relative group sm:inset-x-0 md:inset-x-1 lg:-inset-x-1 inset-x-0"><i
                class="fa-solid fa-magnifying-glass mr-4 relative lg:inset-x-6 md:translate-x-2 sm:translate-x-2 inset-x-10  "></i><span
                href="#" class="justify-self-start sm:hidden md:hidden lg:block hidden ">Monitoring</span></a>
        <a href="{{ url('schedule') }}" id="menu"
            class="w-5/6 grid rounded-md z-0 hover:inset-x-3 transition-transform duration-300 py-1 lg:grid-cols-2 md:grid-cols-1 md:py-2 sm:py-2 sm:grid-cols-1  -space-x-6 items-center relative group sm:inset-x-0 md:inset-x-1 lg:-inset-x-1 inset-x-0"><i
                class="fa-solid fa-calendar mr-4 relative lg:inset-x-6 md:translate-x-2 sm:translate-x-2 inset-x-10  "></i><span
                href="" class="justify-self-start sm:hidden md:hidden lg:block hidden ">Scheduling</span></a>
                
        <a href="{{ url('faculty') }}" id="menu"
            class="w-5/6 grid rounded-md z-0 hover:inset-x-3 transition-transform duration-300 py-1 lg:grid-cols-2 md:grid-cols-1 md:py-2 sm:py-2 sm:grid-cols-1  -space-x-6 items-center relative group sm:inset-x-0 md:inset-x-1 lg:-inset-x-1 inset-x-0"><i
                class="fa-solid fa-users mr-4 relative lg:inset-x-6 md:translate-x-2 sm:translate-x-2 inset-x-10  "></i><span
                href="#"
                class="justify-self-start sm:hidden md:hidden lg:block hidden ">Users</span></a>

        <a href="{{ route('logs') }}" id="menu"
            class="w-5/6 grid rounded-md z-0 hover:inset-x-3 transition-transform duration-300 py-1 lg:grid-cols-2 md:grid-cols-1 md:py-2 sm:py-2 sm:grid-cols-1  -space-x-6 items-center relative group sm:inset-x-0 md:inset-x-1 lg:-inset-x-1 inset-x-0"><i
                class="fa-solid fa-clipboard-list mr-4 relative lg:inset-x-6 md:translate-x-2 sm:translate-x-2 inset-x-10  "></i><span
                class="justify-self-start sm:hidden md:hidden lg:block hidden ">Logs</span></a>
        <a href="{{ route('settings') }}" id="menu"
            class="w-5/6 grid rounded-md z-0 hover:inset-x-3 transition-transform duration-300 py-1 lg:grid-cols-2 md:grid-cols-1 md:py-2 sm:py-2 sm:grid-cols-1  -space-x-6 items-center relative group sm:inset-x-0 md:inset-x-1 lg:-inset-x-1 inset-x-0"><i
                class="fa-solid fa-gear mr-4 relative lg:inset-x-6 md:translate-x-2 sm:translate-x-2 inset-x-10  "></i><span
                href="#" class="justify-self-start sm:hidden md:hidden lg:block hidden ">Settings</span></a>
    </div>
    <div>
        <ul id="profile"
            class="flex inset-x-4 inset-y-16 relative flex-row h-full items-center mr-2  transition-opacity  lg:-translate-x-2 lg:opacity-0 md:opacity-100 sm:opacity-100 opacity-100 translate-x-10  ">
            <li class="w-12 h-12 relative mt-2 mr-3 sm:-inset-x-6 md:-inset-x-3 lg:inset-x-0 -inset-x-6"><img
                    src="/images/usersample.jpg" alt="" class="rounded-full bg-contain bg-no-repeat "> </li>
            <li class="-inset-y-4 sm:hidden md:hidden lg:block hidden "><span class="text-sm ">Welcome!</br>[First Name]</span> </li>
        </ul>
    </div>
    <div class=" flex flex-col text-lg   mb-10 justify-center">

        <button class="w-5/6 grid  rounded-md hover:inset-x-3 transition-all duration-300 py-1 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 -space-x-6 items-center relative group">
            <i class="fa-solid fa-arrow-right-from-bracket mr-2 ml-8 sm:ml-8 md:ml-2 lg:ml-0"></i>
            <a href="{{ route('logout') }}"class="justify-self-start sm:hidden md:hidden lg:block hidden">Log Out</a>
        </button>
    </div>
</aside>
