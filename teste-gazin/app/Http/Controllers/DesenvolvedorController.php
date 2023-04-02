<?php

namespace App\Http\Controllers;

use App\Models\Desenvolvedor;
use App\Models\Nivel;
use Illuminate\Http\Request;

class DesenvolvedorController extends Controller
{
    public function index()
    {

        $desenvolvedors = Desenvolvedor::get();

        return view('desenvolvedors.index', ['desenvolvedors' => $desenvolvedors]);
    }

    public function show(int $id)
    {
        $desenvolvedor  = Desenvolvedor::find(intval($id));
        return view('desenvolvedors.show', ['desenvolvedor' => $desenvolvedor]);
    }

    public function create()
    {
        $nivel = Nivel::all();
        return view('desenvolvedors.create', compact('nivel'));
       // return view('desenvolvedors.create');
    }

    public function store(Request $req)
    {
        $dados = $req->except('_token'); 
        Desenvolvedor::create($dados);
        return redirect('/desenvolvedors');
    }

    public function edit(int $id) 
    {
        $desenvolvedor = Desenvolvedor::find($id);
        return view('desenvolvedors.edit', ['desenvolvedor' => $desenvolvedor]);
    }

    public function update(int $id, Request $req)  
    {
        $desenvolvedor = Desenvolvedor::find($id);
        $desenvolvedor->update([
            'nome' => $req->nome,
            'email' => $req->email,
            'nivel_id' => $req->nivel_id
        ]);
        return redirect('/desenvolvedors');
    }

    public function destroy(int $id)  
    {
       $desenvolvedor = Desenvolvedor::find($id);
       $desenvolvedor->delete();
       return redirect('/desenvolvedors');
    }
}
