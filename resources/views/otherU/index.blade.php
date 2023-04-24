@extends('layouts.alumnos')
@section('title', 'Menu de alumno')
@section('contenido')
<main class="flex bg-white">
        <aside class="bg-stone-900 relative h-screen w-72 md:w-60 hidden sm:block">
            <div class="p-6">
                <a href="{{route('admin.index')}}" class="text-white text-3x1 font-semibold">
                    <i class="fas fa-user-cog mr-3"></i>Alumno
                </a>
            </div>
            <nav class="text-white text-base font-semibold pt-4">
                <a href="{{route('otherU.registerp')}}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item hover:bg-zinc-800" >Material de Practica </a> 
            </nav>
        </aside>
    </main>
@endsection