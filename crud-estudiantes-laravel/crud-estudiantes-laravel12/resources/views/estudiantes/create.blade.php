@extends('layouts.app')

@section('title', 'Registrar Estudiante')

@section('content')
<h1 class="text-2xl font-bold mb-4">Registrar Nuevo Estudiante</h1>

<form action="{{ route('estudiantes.store') }}" method="POST" class="bg-white p-6 rounded shadow max-w-lg">
    @csrf

    <div class="mb-4">
        <label for="nombre" class="block font-semibold mb-1">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" class="w-full border-gray-300 rounded p-2">
        @error('nombre')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="correo" class="block font-semibold mb-1">Correo:</label>
        <input type="email" id="correo" name="correo" value="{{ old('correo') }}" class="w-full border-gray-300 rounded p-2">
        @error('correo')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="carrera_id" class="block font-semibold mb-1">Carrera:</label>
        <select id="carrera_id" name="carrera_id" class="w-full border-gray-300 rounded p-2">
            <option value="">Seleccione una carrera</option>
            @foreach($carreras as $carrera)
                <option value="{{ $carrera->id }}" @selected(old('carrera_id') == $carrera->id)>{{ $carrera->nombre }}</option>
            @endforeach
        </select>
        @error('carrera_id')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="semestre" class="block font-semibold mb-1">Semestre:</label>
        <input type="number" id="semestre" name="semestre" value="{{ old('semestre') }}" class="w-full border-gray-300 rounded p-2">
        @error('semestre')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
    <a href="{{ route('estudiantes.index') }}" class="ml-2 text-gray-600">Cancelar</a>
</form>
@endsection
