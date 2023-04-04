@extends('app')
@section('title', 'Adicionar Novo Desenvolvedor')
@section('content')

    <h1>Novo Desenvolvedor</h1>

    <form action="{{ route('desenvolvedors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" id="email" placeholder="Digite seu email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nivel_id" class="form-label">Nível</label>
            <select name="nivel_id" id="nivel_id" class="form-control" required>
                    <option value="">Selecione o nível</option>

                @foreach($nivels as $nivel)

                    <option value="{{ $nivel->nome }}">{{ $nivel->nome }}</option>
                 
                @endforeach
            </select>
        </div>

        <button class="btn btn-success w-100" type="submit">Enviar</button>
    </form>

@endsection
