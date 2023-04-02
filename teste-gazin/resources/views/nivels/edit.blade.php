@extends('app')
@section('title', 'Editar Nível')

@section('content')
    <form action="{{ route('nivels.update', $nivel) }}" method="POST">
         @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome" value="{{ $nivel->nome }}"
                class="form-control" required>
        </div>
    
        </div>
        <button class="btn btn-success w-100" type="submit">Enviar</button>
    </form>
@endsection
