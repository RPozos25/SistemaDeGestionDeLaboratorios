@extends('layouts.app')

@section('title', 'Menu de administrador')

@section('contenido')
    <main class="flex bg-white">
        <aside class="bg-stone-900 relative h-screen w-72 md:w-60 hidden sm:block">
            <div class="p-6">
                <a href="{{route('admin.index')}}" class="text-white text-3x1 font-semibold">
                    <i class="fas fa-user-cog mr-3"></i>Admin
                </a>
            </div>
            <nav class="text-white text-base font-semibold pt-4">
                <a href="{{route('laboratorio.crudLaboratorio')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:bg-stone-800" >Laboratorio</a>
                <a href="{{route('EquipoComputo.crudEC')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:bg-stone-800">Equipo de computo</a>
                <a href="{{route('MaterialPractica.crudMP')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:bg-stone-800">Material de practica</a>
                <a href="{{route('otherU.pedidos')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:bg-stone-800">Pedidos</a>
                <a href="{{route('users.crudUser')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:bg-stone-800">Usuarios</a>
            </nav>
        </aside>
    </main>
@endsection