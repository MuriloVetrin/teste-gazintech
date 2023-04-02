@extends('app')
@section('title', 'Adicionar Novo Nível')
@section('content')

    <h1>Novo Nível</h1>

    <form action="{{ route('nivels.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome" class="form-control" required>
        </div>
       
        <button class="btn btn-success w-100" type="submit">Enviar</button>
    </form>

@endsection
