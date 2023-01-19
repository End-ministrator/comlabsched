<div>
    <nav class="flex p-5 w-full bg-zinc-500 justify-between">
        <h1 class="text-yellow-300">LABSCHED</h1>
        <ul class="flex">
            @if(auth()->user()->role == 'department head')
                <li class="mr-5"><a class="text-white" href="#">Schedules</a></li>
                <li class="mr-5"><a class="text-white" href="#">Faculties</a></li>
                <li class="mr-5"><a class="text-white" href="{{ route('logs') }}">Logs</a></li>
            @endif
            <li class="mr-5"><a class="text-white" href="{{ route('dashboard') }}">Monitoring</a></li>
            <li class="mr-5"><a class="text-white" href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </nav>
</div>