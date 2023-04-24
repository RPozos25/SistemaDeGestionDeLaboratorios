@extends('layouts.app')

@section('title', 'Registro')

@section('contenido')
    <h2 class="text-4xl text-center font-bold">Registro</h2>
    <div class="block mx-auto my-2 p-8 bg-white w-1/3 border-gray-200 rounded-lg shadow-lg">    
        <form class="mt-4" action="" method="POST">
            @csrf
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="text" placeholder="Nombre" id="name" name="name">
            @error('name')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
            @enderror
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="text" placeholder="Apellido Paterno" id="app" name="app">
            @error('app')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
            @enderror
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="text" placeholder="Apellido Materno" id="apm" name="apm">
            @error('apm')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
            @enderror
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="email" placeholder="Email" id="email" name="email">
            @error('email')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
            @enderror
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="password" placeholder="Password" id="password" name="password">
            @error('password')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
            @enderror
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="password" placeholder=" Confirmar Password" id="password_confirmation" name="password_confirmation">
            <input type="hidden" value="2" id="rol" name="rol">
            <button type="submit" class="rounded-md bg-green-700 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-green-800">send</button>
        </form>
    </div>
@endsection