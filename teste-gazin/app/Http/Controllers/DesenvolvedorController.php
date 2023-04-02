<?php

namespace App\Http\Controllers;

use App\Models\Desenvolvedor;
use Illuminate\Http\Request;

class DesenvolvedorController extends Controller
{
    public function index()
    {

        $desenvolvedor = Desenvolvedor::get();

        return view('desenvolvedor.index', ['devs ' => $desenvolvedor ]);
    }

    public function show(int $id)
    {

        $desenvolvedor  = Desenvolvedor::find($id);
        return view('desenvolvedor.show', [
            'devs ' => $desenvolvedor
        ]);
    }

    public function create()
    {
        return view('desenvolvedor.create');
    }

    public function store(Request $req)
    {
        $dados = $req->except('_token'); 
        Desenvolvedor::create($dados);
        return redirect('/home');
    }

    public function edit(int $id) 
    {
        $desenvolvedor = Desenvolvedor::find($id);
        return view('desenvolvedor.edit', ['devs' => $desenvolvedor]);
    }

    public function update(int $id, Request $req)  
    {
        $desenvolvedor = Desenvolvedor::find($id);
        $desenvolvedor->update([
            'nome' => $req->nome,
            'email' => $req->email,
            'nivel_id' => $req->nivel_id
        ]);
        return redirect('/home');
    }

    public function destroy(int $id)  
    {
       $desenvolvedor = Desenvolvedor::find($id);
       $desenvolvedor->delete();
       return redirect('/home');
    }
}
