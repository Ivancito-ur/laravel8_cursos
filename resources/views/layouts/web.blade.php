<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 8</title>


    {{-- Funcion de laravel para que me traiga el archivo css del proyecto --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="shadow-lg">
        <div class="bg-red-700 py-1">
            <nav class="bg-red-600 py-2">
                <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" class="h-8 mx-auto rounded-br-md" alt="" srcset="">
            </a>
            </nav>
        </div>
    </header>
    <main class="py-10">
        <div class="container mx-auto px-4">
            {{-- Aqui colocamos todo el contenido que va a cambiar. --}}
            @yield('content')
        </div>
    </main>

    <footer class="py-4 text-center">
        @auth
            <a href="{{ url('dashboard')}}" class="text-sm text-gray-700 underline">
            Dashboard</a>
        @else
        <a href="{{ url('login')}}" class="text-sm text-gray-700 underline">
            Login</a>

            <a href="{{ url('register')}}" class="text-sm text-gray-700 underline">
                Register</a>
        @endif

    </footer>
</body>
</html>