@extends('layouts.app')
@section('title', 'Registro de Equipo de Computo')
@section('contenido')
    <h2 class="text-4xl text-center font-bold">Registro Equipo de Computo</h2>
    <div class="block mx-auto my-6 p-8 bg-white w-1/3 border-gray-200 rounded-lg shadow-lg">    
        <form class="mt-1" action="{{route('equipo.store')}}" method="POST">
            @csrf
            <p>Ingresa el id asignado por el gobierno:</p>
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="text" placeholder="Id gobierno" id="codgobierno" name="codgobierno">
            <p>Selecciona el laboratorio donde estara el nuevo equipo:</p>
            <select name="laboratorio" id="laboratorio" class="form-select form-select-lg mb-2
                        appearance-none block w-full px-2 py-1 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300 rounded transition ease-in-out m-0
                        focus:text-gray-700 focus:bg-white focus:border-green-700 focus:outline-none">
                <option value="" class="form-control">-- Escoja una opción</option>
                @foreach($lab as $la)
                    <option value="{{ $la['id']}}">{{$la['nombre']}}</option>
                @endforeach
            </select>
            <p>Selecciona el equipo nuevo:</p>
            <select name="equipo" id="equipo" class="form-select form-select-lg mb-2
                        appearance-none block w-full px-2 py-1 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300 rounded transition ease-in-out m-0
                        focus:text-gray-700 focus:bg-white focus:border-green-700 focus:outline-none">
                <option value="" class="form-control">-- Escoja una opción</option>
                @foreach($ec as $eq)
                    <option value="{{ $eq['id']}}">{{$eq['descripcion']}}</option>
                @endforeach
            </select>
            <p>Escribe la funcion del laboratorio:</p>
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="text" placeholder="Descripcion" id="descripcion" name="descripcion">
            <p>Selecciona el status del equipo</p>
            <select name="estado" id="estado" class="form-select form-select-lg mb-2
                        appearance-none block w-full px-2 py-1 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300 rounded transition ease-in-out m-0
                        focus:text-gray-700 focus:bg-white focus:border-green-700 focus:outline-none">
                <option value="" class="form-control">-- Escoja una opción</option>
                @foreach($estado as $esta)
                    <option value="{{ $esta['id']}}">{{$esta['descripcion']}}</option>
                @endforeach
            </select>
            <button type="submit" class="rounded-md bg-green-700 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-green-800">send</button>
        </form>
    </div>
@endsection