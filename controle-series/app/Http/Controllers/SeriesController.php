<?php

namespace App\Http\Controllers;

use app\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
   public function index(Request $request) {

       $series = Serie::all();
       var_dump($series);

       return view('series.index', compact('series'));
   }

    public function create()
    {
        return view('series.create');
   }

    public function store(Request $request)
    {
        $nome = $request->nome;
        $serie = new Serie();
        $serie->nome = $nome;
        var_dump($serie->save());
   }
}
