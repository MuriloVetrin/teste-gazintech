@extends('app')
@section('title', 'Editar Desenvolvedor')
@section('content')

    <h1>Editar Desenvolvedor</h1>

    <form action="{{ route('desenvolvedors.update', $desenvolvedor) }}" method="POST">
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
            <select name="nivel_id" id="nivel_id" class="form-control" value="{{ $desenvolvedor->nivel_id }}" required>
                    <option value="">Selecione o nível</option>
                @foreach($nivels as $nivel)
                    <option value="{{ $nivel->id }}">{{ $nivel->nome }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success mb-3" type="submit"> Enviar </button>
        <a class="btn btn-secondary mb-3" href="{{ route('desenvolvedors.index') }}">Voltar para lista de desenvolvedores</a>
    </form>
@endsection
