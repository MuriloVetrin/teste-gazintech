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
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($devs as $dev)
        <tr>
            <th scope="row">{{$dev->id}}</th>
            <th scope="row">
                <a href="{{route('desenvolvedor.show', $dev)}}">{{$dev->nome}}</a>
            </th>
            <th scope="row">{{$dev->email}}</th>
            <th>
            
                <a class="btn btn-primary" href="{{route('desenvolvedor.edit', $dev)}}">Editar</a>

            <form action="{{route('desenvolvedor.destroy', $dev)}}"
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
<a class="btn btn-success" href="{{ route('desenvolvedor.create') }}">Novo Desenvolvedor</a>
<a class="btn btn-primary" href="{{ route('nivel.index') }}">Gerenciar Níveis</a>

@endsection
