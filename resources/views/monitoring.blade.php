@extends('layouts.main')

@section('title', 'Department Head | Dashboard')

@section('content')
    <div class="flex flex-row">

        <div class=" flex">
            @if (auth()->user()->role == 'Admin')
                <script>
                    const flag = 1;
                </script>
                <x-nav-bar />
            @endif
            @if (auth()->user()->role == 'Faculty')
                <script>
                    const flag = 2;
                </script>
                <x-nav-bar-user />
            @endif
        </div>

        <div class=" lg:ml-x sm:ml-xsm  md:ml-xsm ml-xsm  flex-col w-full ">
            <x-topbar />
            <!-- main content goes here -->
            <div class="flex px-7 py-7 w-full h-full bg-smokeywhite dark:bg-gray-800">
                <div class="flex flex-col w-full h-full bg-white dark:bg-gray-700 rounded-lg text-black !important px-7">
                    <livewire:monitoring-calendar before-calendar-view="calendar/before" />
                    <div class="w-full flex justify-end  pt-7">
                        <div class="flex justify-center items-center bg-blue-700 text-white dark:bg-blue-700 hover:bg-blue-600 border  rounded-md border-blue-700 w-36 h-10">
                            <a href="{{ route('export')}}" class=""> Export Schedule </a>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>

    </div>

    <script>
        // Check the user's role and show/hide the button accordingly
        if (flag === 1) {
            ds.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            us.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            lg.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            mn.classList.add('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            sc.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            st.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');


        } else {
            ds.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            lg.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            mn.classList.add('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');
            st.classList.remove('dark:bg-blue-800', 'bg-blue-800', 'shadow-inner', 'shadow-blue-800');

        }
    </script>





@endsection
