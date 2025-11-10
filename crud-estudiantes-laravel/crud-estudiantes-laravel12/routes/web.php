<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){ return redirect()->route('estudiantes.index'); });
Route::resource('carreras', CarreraController::class);
Route::resource('estudiantes', EstudianteController::class);
