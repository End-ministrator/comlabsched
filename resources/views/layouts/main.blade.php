<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<header>
    <div class="flex w-full bg-zinc-500 h-12 text-center">
        <h1 class="text-yellow-300">LABSCHED</h1>
    </div>
    
</header>
<body class="bg-gradient-to-r from-neutral-800 to-neutral-600 font-sans">
    @yield('content')
</body>
<footer>
    <div class="flex w-full bg-zinc-500 h-12 text-center -mb-28">
         <h1>2023</h1>
    </div>
   
</footer>
</html>