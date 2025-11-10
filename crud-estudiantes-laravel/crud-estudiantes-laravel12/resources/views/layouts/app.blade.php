<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CRUD')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-blue-600 text-white p-4 flex justify-between">
        <a href="{{ route('estudiantes.index') }}" class="font-bold">Estudiantes</a>
        <a href="{{ route('carreras.index') }}">Carreras</a>
    </nav>

    <div class="max-w-4xl mx-auto p-6">
        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-2 rounded mb-4">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>
</body>
</html>
