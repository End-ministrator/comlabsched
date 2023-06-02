<!DOCTYPE html>
<html lang="en" class="dark">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
    <!-- Scripts -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/f26d36d903.js" crossorigin="anonymous"></script>
    @livewireStyles
    <!-- Alpine v3 -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Chart Js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Focus plugin -->
    <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>

    <style>
        /* For Webkit Browsers */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>


    <script>
        window.addEventListener('scroll', () => {
            const LOGO = document.getElementById('logo');
            const PROFILE = document.getElementById('profile');
            const targetpoint = 47;
            const scrollval = window.scrollY;
            console.log(scrollval);
            if (scrollval > targetpoint) {
                LOGO.classList.remove('lg:opacity-0', 'lg:-translate-x-2');
                LOGO.classList.add('lg:opacity-100', 'transition-opacity', 'lg:translate-x-2',
                    'transition-transform');
                PROFILE.classList.remove('lg:opacity-0', 'lg:-translate-x-2');
                PROFILE.classList.add('lg:opacity-100', 'transition-opacity', 'lg:translate-x-2',
                    'transition-transform');

            } else {
                LOGO.classList.remove('lg:opacity-100', 'lg:translate-x-2');
                LOGO.classList.add('lg:opacity-0', 'transition-opacity', 'lg:-translate-x-2',
                    'transition-transform');
                PROFILE.classList.remove('lg:opacity-100', 'lg:translate-x-2');
                PROFILE.classList.add('lg:opacity-0', 'transition-opacity', 'lg:-translate-x-2',
                    'transition-transform');

            }





        });
    </script>
    <!-- full calendar -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.8/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
                initialView: 'dayGridMonth',
                nowIndicator: true,
                slotMinTime: '08:00:00',
                slotMaxTime: '20:00:00',
                slotduration: '00:15:00',
                height: 780,
                datesAboveResources: true,
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'resourceTimeGridDay,resourceTimeGridWeek,resourceDayGridMonth,resourceListMonth'
                },
                views: {
                    resourceTimeGridWeek: {
                        type: 'resourceTimeGrid',
                        duration: {
                            days: 7
                        },
                        buttonText: '7 days'
                    }
                },
                resources: [{
                        id: 'a',
                        title: 'Room A'
                    },
                    {
                        id: 'b',
                        title: 'Room B'
                    }
                ],
                events: 'https://fullcalendar.io/api/demo-feeds/events.json?with-resources=2',
                editable: true,
            });

            calendar.render();
        });
    </script>



    <script>
        window.flag = 0;
    </script>

</head>

<body class=" bg-smokeywhite dark:bg-gray-800 dark:text-white  " id="body">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif

    @yield('content')
    @livewireScripts
    @livewire('livewire-ui-modal')
</body>
<!-- <footer>
    <div class="flex w-full bg-zinc-500 h-12 text-center -mb-28">
         <h1>2023</h1>
    </div>
</footer> -->

</html>
