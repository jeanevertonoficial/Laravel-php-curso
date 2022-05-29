<!-- fazendo a extenção do arquivo -->

@extends('layout')

<!-- titudo dinamico -->
@section('titulo')

    Listas de series

@endsection


<!-- chamando a sessão do cabelho-->
@section('cabecalho')

    Series

@endsection

<!-- chamando a sessão do conteudo -->
@section('conteudo')

    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a href="{{ route('form_criar_serie') }}" class="btn btn-dark mb-2 mt-5">adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome }}
                <form action="/series/{{ $serie->id }}" method="post"
                      onsubmit="return confirm('Tem certeza que deseja excluir a série {{ $serie->nome }} ?')"
                >
                    @method('DELETE')
                    @csrf <!-- metodo de verificação de seguranga do lavarel, enviar um token e verifica -->
                    <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
