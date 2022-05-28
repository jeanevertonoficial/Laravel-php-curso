<!-- fazendo a extenção do arquivo -->
@extends('layout')

<!-- chamando a sessão do cabelho-->
@section('cabecalho')
Series
@endsection

<!-- chamando a sessão do conteudo -->
@section('conteudo')
    <a href="series/adicionar" class="btn btn-dark mb-2 mt-5">adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie->nome }} </li>
        @endforeach
    </ul>
@endsection
