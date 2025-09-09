<?php

use App\Http\Controllers\HeroController;
use App\Models\Hero;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/heroes', [HeroController::class, 'index'])->name('heroes.index');
Route::get('/heroes/add', [HeroController::class, 'add'])->name('heroes.add');
Route::get('/heroes/{id}',[HeroController::class, 'view'])->name('heroes.view');

