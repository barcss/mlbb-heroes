<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/heroes', function() {
    $heroes = [
        ["name" => "Beatrix", "role" => "Marksman", "id" => "40", 'price' => '32000'],
        ["name" => "Guinevere", "role" => "Fighter", "id" => "12", 'price' => '24000'],
    ];
    return view('heroes.index', ['greetings'=>"SEX", "heroes" => $heroes]);
});

Route::get('/heroes/add', function() {
    return view('heroes.add');
});

Route::get('/heroes/{id}', function($id) {
    return view('heroes.view', ['id' => $id]);
});