<?php

use App\Http\Controllers\ObjectiveController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/objectives', [ObjectiveController::class, 'index']);
