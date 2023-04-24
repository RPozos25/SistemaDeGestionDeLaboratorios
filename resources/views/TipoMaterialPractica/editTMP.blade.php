@extends('layouts.app')
@section('title', ' Edit Registro')
@section('contenido')
    <h2 class="text-4xl text-center font-bold">Registro {{$tmp->id}}</h2>
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-lg shadow-lg">    
        <form class="mt-4" action="{{route('tmaterial.update', $tmp->id)}}" method="POST">
            @csrf
            @method('put')
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="text" placeholder="Equipo de computo" id="descripcion" name="descripcion" value="{{$tmp->descripcion}}">
            <button type="submit" class="rounded-md bg-green-700 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-green-800">send</button>
        </form>
    </div>
@endsection 