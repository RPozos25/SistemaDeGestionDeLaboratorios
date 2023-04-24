<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Teschi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="flex py-5 bg-green-700 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2xl font-bold">
                Home
            </p>
        </div>
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())    
            <li class="mx-6">
                <p class="text-xl">Bienvenido <b>{{ auth()->user()->name}}</b></p>              
            </li>  
            <li>  
                <a href="{{route('login.destroy')}}" class="font-bold py-2 px-4 rounded-md bg-red-500 hover:bg-red-600">Log Out</a>
            </li>
        @else
            <li class="mx-6">
                <a href="{{route('login.index')}}" class="font-semibold hover:bg-green-800 py-3 px-4 rounded-md">Log In</a>
            </li>  
            <li>  
                <a href="{{route('register.index')}}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-green-800">Registro</a>
            </li>

        @endif
        </ul>
    </nav>
    @yield('contenido')
</body>
</html>