@extends('app')

@section('title', 'Pesquisa')

@section('content')
    <h1>Classificação “Padrão” de Desenvolvedores:</h1>
    <ul>
        <li>Trainee -> 2 a 2 anos e meio</li>
        <li>Júnior (JR) -> até 5 anos</li>
        <li>Pleno (PL) -> 6 a 9 anos</li>
        <li>Sênior (SR) -> a partir de 10 anos</li>
        <li>Master -> 15 anos ou mais</li>

        <a class="btn btn-primary mt-3" href="{{ url('/nivel') }}">Voltar</a>
        <a href="https://www.profissionaisti.com.br/niveis-profissionais-junior-pleno-e-senior-na-carreira-de-programador/" target="_blank" class="btn btn-secondary mt-3">Mais Informações</a>

    </ul>
@endsection
