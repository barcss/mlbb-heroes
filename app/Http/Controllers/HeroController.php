<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    //Retrieve all Hero at order then return a view with data of heroes
    public function index() {
        $heroes = Hero::orderBy('created_at', 'desc')->get();
        return view('heroes.index', ["heroes" => $heroes]);
    }

    public function view($id) {
        $heroes = Hero::findOrFail($id);
        return view('heroes.view', ['heroes' => $heroes]);
    }

    public function add() {
        return view('heroes.add');

    }
}
