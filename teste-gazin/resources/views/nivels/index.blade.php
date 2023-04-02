@extends('app')
@section('title','Lista de Níveis')

@section('content')
<h1>Lista de Níveis</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Editar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($nivels as $nivel)
        <tr>
            <th scope="row">{{$nivel->id}}</th>
            <th scope="row">
                <a href="{{route('nivels.show', $nivel)}}">{{$nivel->nome}}</a>
            </th>
            
                <a class="btn btn-primary" href="{{route('nivels.edit', $nivel)}}">Editar</a>

            <form action="{{route('nivels.destroy', $nivel)}}"
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
<a class="btn btn-success" href="{{ route('nivels.create') }}">Novo nivel</a>
<a class="btn btn-secondary" href="{{ route('desenvolvedors.index') }}">Voltar para Lista de Desenvolvedores</a>

@endsection