<!-- fazendo a extenção do arquivo -->
@extends('layout')

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

    <a href="series/adicionar" class="btn btn-dark mb-2 mt-5">adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">
                {{ $serie->nome }}
                <form action="/series/{{ $serie->id }}" method="post"
                onsubmit="return confirm('Tem certeza que deseja excluir a série {{ $serie->nome }} ?')"
                >
                    @method('DELETE')
                    @csrf <!-- metodo de verificação de seguranga do lavarel, enviar um token e verifica -->
                    <button class="btn btn-danger">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
