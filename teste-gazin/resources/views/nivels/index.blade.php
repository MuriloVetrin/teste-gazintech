@extends('app')
@section('title','Lista de Níveis')

@section('content')
<h1>Lista de Níveis</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
        </tr>
    </thead>
    <tbody>
        @foreach($nivel as $nivel)
        <tr>
            <th scope="row">{{$nivel->id}}</th>
            <th scope="row">
                <a href="{{route('nivel.show', $nivel)}}">{{$nivel->nome}}</a>
            </th>
            
                <a class="btn btn-primary" href="{{route('nivel.edit', $nivel)}}">Editar</a>

            <form action="{{route('nivel.destroy', $nivel)}}"
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
<a class="btn btn-success" href="{{ route('nivel.create') }}">Novo nivel</a>
@endsection