@extends('layouts.app')
@section('title', ' Modificacion de Usuarios')
@section('contenido')
    <h2 class="text-4xl text-center font-bold">Edit {{$users->id}}</h2>
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-lg shadow-lg">    
        <form class="mt-4" action="{{route('users.update', $users->id)}}" method="POST">
            @csrf
            @method('put')
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="text" placeholder="Name" id="name" name="name" value="{{$users->name}}">
            @error('name')
                <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
            @enderror
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="text" placeholder="Apellido Paterno" id="app" name="app" value="{{$users->app}}">
            @error('app')
                <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
            @enderror
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="text" placeholder="Apellido Materno" id="apm" name="apm" value="{{$users->apm}}">
            @error('apm')
                <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
            @enderror
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="email" placeholder="Email" id="email" name="email" value="{{$users->email}}">
            @error('email')
                <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
            @enderror
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="password" placeholder="Password" id="password" name="password">
            @error('password')
                <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
            @enderror
            <select name="rol" id="rol" class="form-select form-select-lg mb-2
                        appearance-none block w-full px-2 py-1 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300 rounded transition ease-in-out m-0
                        focus:text-gray-700 focus:bg-white focus:border-green-700 focus:outline-none">
                <option  class="form-control" >-- Escoja la categoria></option>
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo['id']}}" {{$tipo->id == $users->rol ? 'selected' : ''}}>{{$tipo['descripcion']}}</option>
                @endforeach
            </select>
            <button type="submit" class="rounded-md bg-green-700 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-green-800">send</button>
        </form>
    </div>
@endsection