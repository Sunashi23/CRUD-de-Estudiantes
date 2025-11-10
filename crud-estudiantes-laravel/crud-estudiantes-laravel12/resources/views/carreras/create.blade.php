@extends('layouts.app')

@section('title', 'Registrar Carrera')

@section('content')
<h1 class="text-2xl font-bold mb-4">Registrar Nueva Carrera</h1>

<form action="{{ route('carreras.store') }}" method="POST" class="bg-white p-6 rounded shadow max-w-md">
    @csrf
    <div class="mb-4">
        <label for="nombre" class="block font-semibold mb-1">Nombre de la carrera:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" class="w-full border-gray-300 rounded p-2">
        @error('nombre')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
    <a href="{{ route('carreras.index') }}" class="ml-2 text-gray-600">Cancelar</a>
</form>
@endsection
