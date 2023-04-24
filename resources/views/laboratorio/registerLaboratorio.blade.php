@extends('layouts.app')
@section('title', 'Registro de laboratorio')
@section('contenido')
    <h2 class="text-4xl text-center font-bold">Registro de laboratorio</h2>
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-lg shadow-lg">    
        <form class="mt-1/2" action="{{route('laboratorios.store')}}" method="POST">
            @csrf
            <p>Ingresa el nombre del laboratorio:</p>
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="text" placeholder="Nombre de laboratorio" id="nombre" name="nombre">
            <p>Ingresa la descripción del laboratorio:</p>
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="text" placeholder="Descripcion" id="descripcion" name="descripcion">
            <p>Encargado:</p>
            <select name="encargado" id="encargado" class="form-select form-select-lg mb-2
                        appearance-none block w-full px-2 py-1 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300 rounded transition ease-in-out m-0
                        focus:text-gray-700 focus:bg-white focus:border-green-700 focus:outline-none">
                <option value="" class="form-control">Elige a un administrador</option>
                @foreach($encar as $encargado)
                    <option value="{{ $encargado['id']}}">{{$encargado['name']}}</option>
                @endforeach
            </select>
            <button type="submit" class="rounded-md bg-green-700 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-green-800">send</button>
        </form>
    </div>
@endsection