@extends('layouts.app')

@section('title', 'Lista de Estudiantes')

@section('content')
<h1 class="text-2xl font-bold mb-4">Lista de Estudiantes</h1>
<a href="{{ route('estudiantes.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Nuevo Estudiante</a>

<table class="min-w-full bg-white shadow rounded">
    <thead>
        <tr class="bg-gray-200">
            <th class="p-2">Nombre</th>
            <th class="p-2">Correo</th>
            <th class="p-2">Carrera</th>
            <th class="p-2">Semestre</th>
            <th class="p-2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $e)
        <tr class="border-b">
            <td class="p-2">{{ $e->nombre }}</td>
            <td class="p-2">{{ $e->correo }}</td>
            <td class="p-2">{{ optional($e->carrera)->nombre }}</td>
            <td class="p-2">{{ $e->semestre }}</td>
            <td class="p-2 flex gap-2">
                <a href="{{ route('estudiantes.edit', $e) }}" class="bg-yellow-400 px-2 py-1 rounded">Editar</a>
                <form action="{{ route('estudiantes.destroy', $e) }}" method="POST" onsubmit="return confirm('¿Eliminar estudiante?')">
                    @csrf @method('DELETE')
                    <button class="bg-red-500 text-white px-2 py-1 rounded">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
