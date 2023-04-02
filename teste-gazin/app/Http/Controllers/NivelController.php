<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    public function index()
    {

        $nivels = Nivel::get();
        return view('nivels.index', ['nivels' => $nivels]);
    }

    public function show(int $id)
    {

        $nivel = Nivel::find($id);
        return view('nivels.show', ['nivel' => $nivel]);
    }

    public function create()
    {
        return view('nivels.create');
    }

    public function store(Request $req)
    {
        $dados = $req->except('_token'); 
        Nivel::create($dados);
        return redirect('/nivels');
    }

    public function edit(int $id) 
    {
        $nivel = Nivel::find($id);
        return view('nivels.edit', ['nivel' => $nivel]);
    }

    public function update(int $id, Request $req)  
    {
        $nivel = Nivel::find($id);
        $nivel->update([
            'nome' => $req->nome
        ]);
        return redirect('/nivels');
    }

    public function destroy(int $id)  
    {
       $nivel = Nivel::find($id);
       $nivel->delete();
       return redirect('/nivels');
    }
}
