<?php

namespace App\Http\Controllers;

use App\Models\Desenvolvedor;
use App\Models\Nivel;
use Illuminate\Http\Request;

class DesenvolvedorController extends Controller
{
    public function index()
    {

        $desenvolvedors = Desenvolvedor::paginate();
        $desenvolvedoresComNivel = $desenvolvedors->map(function($desenvolvedor) {
            $nomeNivel = $desenvolvedor->nivel->nome;
            $desenvolvedor->setAttribute('nome_nivel', $nomeNivel);
            return $desenvolvedor;
        });
        return response()->json(['desenvolvedors' => $desenvolvedoresComNivel]);
    }

    public function show(int $id)
    {

        $desenvolvedor = Desenvolvedor::find($id);
        $nivel = Nivel::find($desenvolvedor->nivel_id);
        $desenvolvedor['nivel'] = $nivel->nome;
        return view('desenvolvedors.show', ['desenvolvedor' => $desenvolvedor]);
    }

    public function create()
    {
        $nivels = Nivel::all();
        return view('desenvolvedors.create', compact('nivels'));
    }

    public function store(Request $req)
    {
        $validatedData = $req->validate([
            'email' => 'required|email',
        ], [
            'email.required' => 'O e-mail é obrigatório',
            'email.email' => 'Por favor, coloque um e-mail válido',
        ]);

        $nivel = Nivel::where('nome', $req->nivel_id)->first();
        $dados['nivel_id'] = $nivel->id;
        $dados['nome'] = $req->nome;
        $dados['email'] = $req->email;
        
        Desenvolvedor::create($dados);
        return redirect('/desenvolvedor');
    }

    public function edit(int $id)
    {
        $desenvolvedor = Desenvolvedor::find($id);
        $nivels = Nivel::all();
        return view('desenvolvedors.edit',  compact('nivels'), ['desenvolvedor' => $desenvolvedor]);
    }

    public function update(int $id, Request $req)
    {
        $desenvolvedor = Desenvolvedor::find($id);

        $validatedData = $req->validate([
            'email' => 'required|email',
        ]);

        $desenvolvedor->update([

            'nome' => $req->nome,
            'email' => $validatedData['email'],
            'nivel_id' => $req->nivel_id
        ]);
        return redirect('/desenvolvedor');
    }

    public function destroy(int $id)
    {
        $desenvolvedor = Desenvolvedor::find($id);
        $desenvolvedor->delete();
        return redirect('/desenvolvedor');
    }
}
