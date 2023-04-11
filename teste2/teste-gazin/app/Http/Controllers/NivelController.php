<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    public function index()
    {
        $niveis = Nivel::paginate(3);
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
        try {
            $nivel->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            $error_code = $e->errorInfo[1];
            if ($error_code == 1451) {
                
                $message = 'Não foi possível excluir esse nível pois os seguintes desenvolvedores estão cadastrados com ele: ' . $nivel->desenvolvedor->pluck('nome')->implode(', ');
                return redirect()->back()->with('error', $message);
            } else {
                
                return redirect()->back()->with('error', 'Erro ao excluir o nível');
            }
        }
        return redirect('/nivel');
    }

    public function sobre()
    {
    return view('niveis.sobre');
    }
}
