@extends('layouts.app')
@section('title', 'Todos os produtos cadastrados')
@section('content')
    <h1>Todos os produtos cadastrados</h1>

    <p>
        <a href="/produtos/create" class="btn btn-primary">Novo produto</a>
    </p>

    @if(session('sucesso'))
        <div class="alert alert-success" role="alert">
            {{session('sucesso')}}
        </div>
    @elseif(session('erro'))
        <div class="alert alert-danger" role="alert">
            {{session('erro')}}
        </div>
    @endif


    <div class="row">
        @foreach($produtos as $produto)
            <div class="col-md-3">
                <h4>{{ $produto->titulo }}</h4>

                @if(file_exists("./img/produtos/" . md5($produto->id) . ".webp"))
                    <a href="{{ asset("img/produtos/" . md5($produto->id) . ".webp") }}">
                        {{ Html::image(asset("img/produtos/" . md5($produto->id) . ".webp"), '', ['class' => 'img-thumbnail'])}}
                    </a>
                @else
                    <a href="{{ url('produtos/'.$produto->id) }}">{{$produto->titulo}}</a>
                @endif

                <div style="margin: 10px 0">
                    {{ Form::open(['route' => ['produtos.destroy', $produto->id], 'method' => 'DELETE']) }}
                    <a href="{{ url('produtos/' . $produto->id . '/edit') }}"
                       class="btn btn-primary btn-block">Editar</a>
                    {{ Form::submit('Excluir', ['class' => 'btn btn-danger btn-block']) }}
                    {{ Form::close() }}
                </div>
            </div>
        @endforeach
    </div>
@endsection
