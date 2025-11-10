@extends('layouts.app')

@section('title', 'Carreras')

@section('content')
<h1 class="text-2xl font-bold mb-4">Listado de Carreras</h1>

<a href="{{ route('carreras.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Nueva Carrera</a>

<table class="min-w-full bg-white shadow rounded">
    <thead>
        <tr class="bg-gray-200">
            <th class="p-2">ID</th>
            <th class="p-2">Nombre</th>
            <th class="p-2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($carreras as $carrera)
        <tr class="border-b">
            <td class="p-2">{{ $carrera->id }}</td>
            <td class="p-2">{{ $carrera->nombre }}</td>
            <td class="p-2 flex gap-2">
                <a href="{{ route('carreras.edit', $carrera) }}" class="bg-yellow-400 px-2 py-1 rounded">Editar</a>
                <form action="{{ route('carreras.destroy', $carrera) }}" method="POST" onsubmit="return confirm('¿Eliminar carrera?')">
                    @csrf @method('DELETE')
                    <button class="bg-red-500 text-white px-2 py-1 rounded">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
