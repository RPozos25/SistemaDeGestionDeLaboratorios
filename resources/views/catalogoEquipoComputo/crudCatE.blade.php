@extends('layouts.app')

@section('title', 'Catalogo de Equipo')

@section('contenido')
    <main class="flex bg-gray-100">
        <div class="w-full flex flex-col h-screen overflow-y-hidden">
            <p class="flex justify-center text-4xl text-center font-bold">Catalogo Equipo de computo </p>
            <nav class=" h-16 flex justify-end py-4 px-16">
                <a href="{{route('EquipoComputo.crudEC')}}" class="border border-green-700 rounded px-4 pt-1 h-10 bg-white text-green-700 mx-2">Equipo de computo</a>
                <a href="{{route('catalogoEquipoComputo.crudCatE')}}" class="border border-green-700 rounded px-4 pt-1 h-10 bg-white text-green-700 mx-2">Actualizar</a>
                <a href="{{route('catalogoEquipoComputo.registerCatE')}}" class="text-white rounded px-4 pt-1 h-10 bg-green-700 mx-2 hover:bg-green-800">Nuevo</a>
            </nav>
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-green-700 text-white">
                            <th class="w-2 py-3">ID</th>
                            <th class="w-2 py-3">Descripcion</th>
                            <th class="w-2 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($equipo as $rod)
                            <tr>
                                <td class="py-4 text-center">{{$rod->id}}</td>
                                <td class="p-4 text-center">{{$rod->descripcion}}</td>
                                <td class="p-4 flex justify-center">
                                    <form action="{{ route('catec.destroy',$rod->id)}} " method="POST">
                                        @csrf
                                        @method('delete')    
                                        <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('catec.edit',$rod->id)}}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main > 
@endsection