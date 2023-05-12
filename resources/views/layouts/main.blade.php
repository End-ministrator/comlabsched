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

    <!-- Focus plugin -->
    <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <script>
    function toggleDarkMode() {
      const body = document.querySelector('body');
      body.classList.toggle('dark');
    }

    const darkModeToggle = document.querySelector('#dark-mode-toggle');
    darkModeToggle.addEventListener('click', toggleDarkMode);
  </script>
</head>
   
<body class="bg-white dark:bg-gray-700"> 

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