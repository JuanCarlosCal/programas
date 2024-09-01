<?php

use App\Http\Controllers\ProgramaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('programas', ProgramaController::class);