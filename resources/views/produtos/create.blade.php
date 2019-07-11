@extends('layouts.app')
@section('title', 'Catalogar novo produto')
@section('content')
    <h1>Catalogar novo produto</h1>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('sucesso'))
        <div class="alert alert-success" role="alert">
            {{session('sucesso')}}
        </div>
    @elseif(session('erro'))
        <div class="alert alert-danger" role="alert">
            {{session('erro')}}
        </div>
    @endif

    {{Form::open(['action' => 'ProdutosController@store', 'enctype' => 'multipart/form-data'])}}

    {{Form::label('referencia', 'Referência')}}
    {{Form::text('referencia', '', ['class' => 'form-control', 'required', 'placeholder' => 'Referência'])}}

    {{Form::label('titulo', 'Título')}}
    {{Form::text('titulo', '', ['class' => 'form-control', 'required', 'placeholder' => 'Título'])}}

    {{Form::label('descricao', 'Descrição')}}
    {{Form::textarea('descricao', '', ['rows' => '6','class' => 'form-control', 'required', 'placeholder' => 'Descrição'])}}

    {{Form::label('preco', 'Preço')}}
    {{Form::text('preco', '', ['class' => 'form-control', 'required', 'placeholder' => 'Preço'])}}

    <div class="custom-file" style="margin: 20px 0">
        {{Form::file('fotoproduto', ['class' => 'custom-file-input', 'id' => 'fotoproduto'])}}
        {{Form::label('fotoproduto', 'Foto do Produto', ['class' => 'custom-file-label', 'data-browse' => 'Carregar imagem do produto...'])}}
    </div>

    {{Form::submit('Cadastrar', ['class' => 'btn btn-success'])}}
    <button type="button" class="btn btn-primary" onclick="history.go(-1)">Voltar</button>

    {{Form::close()}}
@endsection
