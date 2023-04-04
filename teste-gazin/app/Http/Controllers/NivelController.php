<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    public function index()
    {

        $niveis = Nivel::get();
        return view('niveis.index', ['niveis' => $niveis]);
    }

    public function show(int $id)
    {

        $nivel = Nivel::find($id);
        return view('niveis.show', ['nivel' => $nivel]);
    }

    public function create()
    {
        return view('niveis.create');
    }

    public function store(Request $req)
    {
        $dados = $req->except('_token'); 
        Nivel::create($dados);
        return redirect('/nivel');
    }

    public function edit(int $id) 
    {
        $nivel = Nivel::find($id);
        return view('niveis.edit', ['nivel' => $nivel]);
    }

    public function update(int $id, Request $req)  
    {
        $nivel = Nivel::find($id);
        $nivel->update([
            'nome' => $req->nome
        ]);
        return redirect('/nivel');
    }

    public function destroy(int $id)  
    {
       $nivel = Nivel::find($id);
       $nivel->delete();
       return redirect('/nivel');
    }
}
