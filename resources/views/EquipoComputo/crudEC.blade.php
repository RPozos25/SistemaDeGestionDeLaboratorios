@extends('layouts.app')
@section('title', 'Equipo de computo')
@section('contenido')
    <main class="flex bg-gray-100">
        <aside class="bg-stone-900 relative h-screen w-72 md:w-64 hidden sm:block">
            <div class="p-6">
                <a href="{{route('admin.index')}}" class="text-white text-3x1 font-semibold">
                    <i class="fas fa-user-cog mr-3"></i>Admin
                </a>
            </div>
            <nav class="text-white text-base font-semibold pt-3">
                <a href="{{route('laboratorio.crudLaboratorio')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:bg-stone-800" >Laboratorio</a>
                <a href="{{route('EquipoComputo.crudEC')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:bg-stone-800">Equipo de computo</a>
                <a href="{{route('MaterialPractica.crudMP')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:bg-stone-800">Material de practica</a>
                <a href="{{route('otherU.pedidos')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:bg-stone-800">Pedidos</a>
                <a href="{{route('users.crudUser')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:bg-stone-800">Usuarios</a>
            </nav>
        </aside>
        <div class="w-full flex flex-col h-screen overflow-y-hidden">
            <p class="flex justify-center text-4xl text-center font-bold">Equipo Computo</p>
            <nav class=" h-16 flex justify-end py-4 px-16">
                <a href="{{route('catalogoEquipoComputo.crudCatE')}}" class="border border-green-700 rounded px-4 pt-1 h-10 bg-white text-green-700 mx-2">Catalogo Equipo de Computo</a>
                <a href="{{route('EquipoComputo.crudEC')}}" class="border border-green-700 rounded px-4 pt-1 h-10 bg-white text-green-700 mx-2">Actualizar</a>
                <a href="{{route('EquipoComputo.registerEC')}}" class="text-white rounded px-4 pt-1 h-10 bg-green-700 mx-2 hover:bg-green-800">Nuevo</a>
            </nav>
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-green-700 text-white">
                            <th class="w-2 py-3">ID</th>
                            <th class="w-2 py-3">Id de gobierno</th>
                            <th class="w-2 py-3">Laboratorio</th>
                            <th class="w-2 py-3">Equipo</th>
                            <th class="w-2 py-3">Descripcion</th>
                            <th class="w-2 py-3">Estado</th>
                            <th class="w-2 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($equipoc as $rod)
                            <tr>
                                <td class="py-4 text-center">{{$rod->id}}</td>
                                <td class="p-4 text-center">{{$rod->codgobierno}}</td>
                                <td class="p-4 text-center">{{$rod->lab->nombre}}</td>
                                <td class="p-4 text-center">{{$rod->cateq->descripcion}}</td>
                                <td class="p-4 text-center">{{$rod->descripcion}}</td>
                                <td class="p-4 text-center">{{$rod->estadoec->descripcion}}</td>
                                <td class="p-4 flex justify-center" >
                                    <form action="{{ route('equipo.destroy',$rod->id)}}" method="POST">
                                        @csrf
                                        @method('delete')    
                                        <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('equipo.edit',$rod->id)}}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection