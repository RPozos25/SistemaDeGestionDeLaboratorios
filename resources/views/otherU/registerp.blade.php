@extends('layouts.alumnos')
@section('title', 'Prestamo de Material')
@section('contenido')
    <h2 class="text-4xl text-center font-bold">Material para practicas </h2>
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-lg shadow-lg">    
        <form class="mt-1" action="{{route('pedido.store')}}" method="POST">
            @csrf
            <select name="material" id="material" class="form-select form-select-lg mb-2
                        appearance-none block w-full px-2 py-1 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300 rounded transition ease-in-out m-0
                        focus:text-gray-700 focus:bg-white focus:border-green-700 focus:outline-none">
                <option value="" class="form-control">-- Escoja la categoria></option>
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo['id']}}">{{$tipo['descripcion']}}</option>
                @endforeach
            </select>
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="hidden" placeholder="Prestasdo a " id="prestado" name="prestado" value="{{ auth()->user()->id }}">
            <input class="border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg white" type="hidden" placeholder="Prestasdo a " id="estado" name="estado" value="3">
            <button type="submit" class="rounded-md bg-green-700 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-green-800">send</button>
        </form>
    </div>
@endsection