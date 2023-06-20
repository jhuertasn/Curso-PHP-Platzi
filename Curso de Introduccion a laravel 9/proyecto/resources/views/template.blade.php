<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Web</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center py-4">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{route('home')}}">
                    <img src="{{asset('images/elefante.png')}}" class="h-12">
                </a>
                <form action="">
                    <input type="text" placeholder="Buscar">
                </form>
            </div>
            @auth 
                <a href="{{route ('dashboard')}}">Deshboard</a>
            @else 
                <a href="{{route ('login')}}">Login</a>   
            @endauth

        </header>
        @yield('content')
    </div>
</body>
</html>