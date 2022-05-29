<!-- fazendo a extenção do arquivo -->
@extends('layout')

@section('titulo')

    adicionar series

@endsection

@section('cabecalho')

    Adiconar nova Serie

@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post">
        @csrf <!-- metodo de verificação de seguranga do lavarel, enviar um token e verifica -->
        <div class="form-group">
            <label for="nome">nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <button class="btn btn-primary mt-1">Salvar</button>
        <a href="{{ route('listar_series') }}" class="btn btn-dark mt-1">Voltar</a>
    </form>
@endsection
