<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index() {
        $series = Serie::query()->orderBy('nome')->get();
        //var_dump($series); exit();

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }
    // o request é possivel pegar os atributos que vem de um formulario
    public function store(Request $request)
    {
        $serie = Serie::create($request->all());

        echo "Série com id  $serie->id  criada:  $serie->nome ";

    }
}
