@extends('layouts.app')
@section('title', ' Cambio de estatus')
@section('contenido')
    <h2 class="text-4xl text-center font-bold">Edit {{$pres->id}}</h2>
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-lg shadow-lg">    
        <form class="mt-4" action="{{route('pedido.update', $pres->id)}}" method="POST">
            @csrf
            @method('put')
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="hidden" placeholder="Prestasdo a " id="prestado" name="prestado" value="{{$pres->prestado}}">
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="hidden" placeholder="Material" id="material" name="material" value="{{$pres->material}}">
            <select name="estado" id="estado" class="form-select form-select-lg mb-2
                        appearance-none block w-full px-2 py-1 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300 rounded transition ease-in-out m-0
                        focus:text-gray-700 focus:bg-white focus:border-green-700 focus:outline-none">
                <option  class="form-control" >-- Escoja la categoria></option>
                @foreach($estado as $esta)
                    <option value="{{ $esta['id']}}" {{$esta->id == $pres->estado ? 'selected' : ''}}>{{$esta['descripcion']}}</option>
                @endforeach
            </select>
            <button type="submit" class="rounded-md bg-green-700 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-green-800">send</button>
        </form>
    </div>
@endsection