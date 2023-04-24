@extends('layouts.app')

@section('title', 'Registro De Material De Computo')

@section('contenido')
    <h2 class="text-4xl text-center font-bold">Register</h2>
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-lg shadow-lg">    
        <form class="mt-1" action="{{route('material.store')}}" method="POST">
            @csrf
            <p>Seleccione el material de practica a ingresar:</p>
            <select name="material" id="material" class="form-select form-select-lg mb-3
                        appearance-none block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300 rounded transition ease-in-out m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                <option value="" class="form-control">-- Escoja la categoria></option>
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo['id']}}">{{$tipo['descripcion']}}</option>
                @endforeach
            </select>
            <p>Ingresa la cantidad de piezas que se tiene:</p>
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="text" placeholder="cantidad" id="cantidad" name="cantidad">
            <p>Marca de material que se tiene:</p>
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="text" placeholder="descripcion" id="descripcion" name="descripcion">
            <button type="submit" class="rounded-md bg-green-700 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-green-800">send</button>
        </form>
    </div>
@endsection