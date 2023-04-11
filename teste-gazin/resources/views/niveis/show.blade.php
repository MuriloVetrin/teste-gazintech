@extends('app')
@section('title','Detalhes do nivel')

@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-header">
        {{$nivel->nome}}
    </div>
    <div class="card-body">
        <p class="card-text"><strong>ID: </strong>{{$nivel->id}}</p>
        <p class="card-text"><strong>Nome: </strong>{{$nivel->nome}}</p>
        <p class="card-text"><strong>Quantidade de devs com esse nível: </strong>{{ $nivel->desenvolvedor->count() }}</p>

        <br>
        <a href="{{route('niveis.index')}}" class="btn btn-success">Voltar á lista de niveis</a>
    </div>
</div>

@endsection