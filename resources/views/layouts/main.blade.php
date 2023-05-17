<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
   
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/f26d36d903.js" crossorigin="anonymous"></script>
    @livewireStyles
    <!-- Alpine v3 -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Chart Js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Focus plugin -->
    <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    

    
    
    <script>
            window.addEventListener('scroll', ()=>
        {   
                const LOGO = document.getElementById('logo');
                const PROFILE = document.getElementById('profile');
                const targetpoint = 47;
                const scrollval = window.scrollY;
                console.log(scrollval);
                if(scrollval > targetpoint){
                    LOGO.classList.remove('lg:opacity-0','lg:-translate-x-2');
                    LOGO.classList.add('lg:opacity-100','transition-opacity','lg:translate-x-2', 'transition-transform');
                    PROFILE.classList.remove('lg:opacity-0','lg:-translate-x-2');
                    PROFILE.classList.add('lg:opacity-100','transition-opacity','lg:translate-x-2', 'transition-transform');
                    
                }else {
                    LOGO.classList.remove('lg:opacity-100','lg:translate-x-2');
                    LOGO.classList.add('lg:opacity-0', 'transition-opacity','lg:-translate-x-2', 'transition-transform');
                    PROFILE.classList.remove('lg:opacity-100','lg:translate-x-2');
                    PROFILE.classList.add('lg:opacity-0','transition-opacity','lg:-translate-x-2', 'transition-transform');
                    
                }

              



        });
    </script>
</head>
   
<body class="bg-white dark:bg-gray-700 lg:text-black md:text-cyan sm:text-violet-600 text-green-500"> 

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