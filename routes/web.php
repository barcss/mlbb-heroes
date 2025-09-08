<?php

use App\Http\Controllers\HeroController;
use App\Models\Hero;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/heroes', [HeroController::class, 'index']);

Route::get('/heroes/add', function() {
    return view('heroes.add');
});

Route::get('/heroes/{id}', function($id) {
    return view('heroes.view', ['id' => $id]);
});