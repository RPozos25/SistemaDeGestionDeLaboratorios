@extends('layouts.app')
@section('title', 'Registro de Usuarios')
@section('contenido')
    <h2 class="text-4xl text-center font-bold">Registro de usuario</h2>
    <div class="block mx-auto my-5 p-8 bg-white w-1/3 border-gray-200 rounded-lg shadow-lg">    
        <form class="mt-1" action="{{route('users.store')}}" method="POST">
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
            <select name="rol" id="rol" class="form-select form-select-lg mb-2
                        appearance-none block w-full px-2 py-1 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300 rounded transition ease-in-out m-0
                        focus:text-gray-700 focus:bg-white focus:border-green-700 focus:outline-none">
                <option value="" class="form-control">-- Escoja el rol </option>
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo['id']}}">{{$tipo['descripcion']}}</option>
                @endforeach
            </select>
            <button type="submit" class="rounded-md bg-green-700 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-green-800">send</button>
        </form>
    </div>
@endsection