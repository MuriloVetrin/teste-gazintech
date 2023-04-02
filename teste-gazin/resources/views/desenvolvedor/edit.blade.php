@extends('app')
@section('title', 'Editar Desenvolvedor')

@section('content')
    <form action="{{ route('desenvolvedores.update', $desenvolvedor) }}" method="POST">
         @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome" value="{{ $desenvolvedor->nome }}"
                class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" id="email" placeholder="Digite seu email"
                value="{{ $desenvolvedor->email }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nivel_id" class="form-label">Nível</label>
            <textarea name="nivel_id" id="nivel_id" placeholder="Digite seu nivel" cols="30" rows="10"
                class="form-control" required>{{ $desenvolvedor->nivel }}</textarea>
        </div>
        <button class="btn btn-success w-100" type="submit">Enviar</button>
    </form>
@endsection
