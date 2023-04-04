@extends('app')
@section('title','Lista de Desenvolvedores')

@section('content')
<h1>Lista de Desenvolvedores</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Nível</th>
            <th scope="col">Editar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($desenvolvedors as $desenvolvedor)
        <tr>
            <th scope="row">{{$desenvolvedor->id}}</th>
            <th scope="row">
                <a href="{{route('desenvolvedors.show', $desenvolvedor)}}">{{$desenvolvedor->nome}}</a>
            </th>
            <th scope="row">{{$desenvolvedor->email}}</th>
            <th>
            
                <a class="btn btn-primary" href="{{route('desenvolvedors.edit', $desenvolvedor)}}">Editar</a>

            <form action="{{route('desenvolvedors.destroy', $desenvolvedor)}}"
            method="POST"
            >
            @method('DELETE')
            @csrf

            <button  

              class="btn btn-danger"
              type="submit"
              onclick="return confirm('Tem certeza que quer apagar?')" 
              > 
              
              APAGAR

            </button>
             </form>
            </th>
           
        </tr>

        @endforeach
    </tbody>
</table>
<a class="btn btn-success" href="{{ route('desenvolvedors.create') }}">Novo Desenvolvedor</a>
<a class="btn btn-primary" href="{{ route('niveis.index') }}">Gerenciar Níveis</a>

@endsection
