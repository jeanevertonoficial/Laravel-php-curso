<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
   public function index(Request $request) {

       $series = [
           'Todo mundo odeia o cris',
           'sobrenatural',
           'Lista Negra'
       ];

       return view('series.index', compact('series'));
   }

    public function create()
    {
        return view('series.create');
   }
}
