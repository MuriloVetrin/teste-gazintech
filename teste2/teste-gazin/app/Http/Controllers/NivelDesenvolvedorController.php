<?php

namespace App\Http\Controllers;

use App\Models\NivelDesenvolvedor;
use Illuminate\Http\Request;

class NivelDesenvolvedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nivel_id = $request->input('nivel_id');
        $desenvolvedor_id = $request->input('desenvolvedor_id');

        $nivelDesenvolvedor = new NivelDesenvolvedor;
        $nivelDesenvolvedor->nivel_id = $nivel_id;
        $nivelDesenvolvedor->desenvolvedor_id = $desenvolvedor_id;
        $nivelDesenvolvedor->save();

        return redirect()->back()->with('success', 'Desenvolvedor adicionado ao nível com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(NivelDesenvolvedor $nivelDesenvolvedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NivelDesenvolvedor $nivelDesenvolvedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NivelDesenvolvedor $nivelDesenvolvedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $nivelDesenvolvedor = NivelDesenvolvedor::find($id);

        if ($nivelDesenvolvedor) {
            $nivelDesenvolvedor->delete();
            return redirect()->back()->with('success', 'Desenvolvedor removido do nível com sucesso.');
        }

        return redirect()->back()->with('error', 'Nível Desenvolvedor não encontrado.');
    }
}
