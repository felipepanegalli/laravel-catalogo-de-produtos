@extends('layouts.app')
@section('title', 'Produto :: ' . $produto->titulo)
@section('content')
    <div class="container">
        <h1>{{$produto->titulo}}</h1>
        <div class="row">
            <div class="col-md-6 col-md-3">
                <ul>
                    <li>Referência: {{ $produto->referencia }}</li>
                    <li>Preço: R${{ number_format($produto->preco,2,',','.') }}</li>
                    <li>Adicionado em: {{ date("d/m/Y", strtotime($produto->created_at))}}</li>
                    <li>Última atualização em: {{ date("d/m/Y", strtotime($produto->updated_at)) }}</li>
                </ul>
                <p>Descrição:</p>
                <p>{{$produto->descricao}}</p>
            </div>
            @if(file_exists("./img/produtos/" . md5($produto->id) . ".webp"))
                <div class="col-md-6 col-md-3">
                    <a href="{{ asset("img/produtos/" . md5($produto->id) . ".webp") }}">
                        {{ Html::image(asset("img/produtos/" . md5($produto->id) . ".webp"), '', ['class' => 'img-thumbnail'])}}
                    </a>
                </div>
            @endif
        </div>
        <button type="button" class="btn btn-primary" onclick="history.go(-1)">Voltar</button>
    </div>
@endsection
