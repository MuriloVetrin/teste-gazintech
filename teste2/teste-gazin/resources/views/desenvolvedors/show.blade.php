@extends('app')
@section('title','Detalhes do desenvolvedor')

@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-header">
        {{$desenvolvedor->nome}}
    </div>
    <div class="card-body">
        <p class="card-text"><strong>ID: </strong>{{$desenvolvedor->id}}</p>
        <p class="card-text"><strong>Nome: </strong>{{$desenvolvedor->nome}}</p>
        <p class="card-text"><strong>Email: </strong>{{$desenvolvedor->email}}</p>
        <p class="card-text"><strong>Nível: </strong>{{$desenvolvedor->nivel}}</p>
        <br>
        <a class="btn btn-success" href="{{route('desenvolvedors.index')}}" class="btn btn-success">Voltar á lista de Desenvolvedor</a>
    </div>
</div>

@endsection