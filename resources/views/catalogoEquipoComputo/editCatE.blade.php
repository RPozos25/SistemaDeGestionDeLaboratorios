@extends('layouts.app')
@section('title', ' Modificacion Al Catalogo De Equipo De Computo')
@section('contenido')
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-lg shadow-lg">    
        <h2 class="text-3x1 text-center font-bold">Register{{$cate->id}}</h2>
        <form class="mt-4" action="{{route('catec.update', $cate->id)}}" method="POST">
            @csrf
            @method('put')
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="text" placeholder="Equipo de computo" id="descripcion" name="descripcion" value="{{$cate->descripcion}}">
            <button type="submit" class="rounded-md bg-green-700 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-green-800">send</button>
        </form>
    </div>
@endsection    