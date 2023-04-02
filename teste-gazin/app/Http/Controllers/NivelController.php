<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    public function index()
    {

        $nivels = Nivel::get();

        return view('nivel.index', ['nivel' => $nivels]);
    }

    public function show(int $id)
    {

        $nivel = Nivel::find($id);
        return view('nivel.show', [
            'nivel' => $nivel
        ]);
    }

    public function create()
    {
        return view('nivel.create');
    }

    public function store(Request $req)
    {
        $dados = $req->except('_token'); 
        Nivel::create($dados);
        return redirect('/home');
    }

    public function edit(int $id) 
    {
        $nivel = Nivel::find($id);
        return view('nivel.edit', ['nivel' => $nivel]);
    }

    public function update(int $id, Request $req)  
    {
        $nivel = Nivel::find($id);
        $nivel->update([
            'nome' => $req->nome
        ]);
        return redirect('/home');
    }

    public function destroy(int $id)  
    {
       $nivel = Nivel::find($id);
       $nivel->delete();
       return redirect('/home');
    }
}
