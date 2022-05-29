<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Database\Console\Migrations\ResetCommand;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()
            ->orderBy('nome')
            ->get();
        /**
         * metodo que pega a mensagem na requisicão e armazena na session, pelo http.
         *
         */
        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        return view('series.create');
    }

    /**
     *  o request é possivel pegar os atributos que vem de um formulario
     *
     */
    public function store(Request $request)
    {
        $serie = Serie::create($request->all());

        /**
         * definindo o tipo de retorno da mensagem.
         * flash faz com que a mensagem seja lida uma vez por requisição e apagada após
         *
         */
        $request->session()
            ->flash(
                'mensagem',
                "Série de $serie->id adicionada com sucesso $serie->nome"
            );

        /**
         * metodo de retorno em lavarel, muito simples.
         */
        return redirect()->route('listar_series');
        /**
         *echo "Série com id  $serie->id  criada:  $serie->nome ";
         *
         */

    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);

        $request->session()
            ->flash(
                'mensagem',
                "Série removida com sucesso"
            );

        return redirect()->route('listar_series');
    }
}
