<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $chamados = Chamado::with('status')->get();
        return view('chamado.index', compact('chamados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chamado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Chamado::create($request->all());
        return redirect()->route('chamado.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $chamado = Chamado::find($id);
        return view('chamado.show', compact('chamado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $chamado = Chamado::find($id);
        return view('chamado.edit', compact('chamado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $chamado = Chamado::find($id);

        $chamado->update([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao
        ]);

        return redirect()->route('chamado.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $chamado = Chamado::find($id);
        $chamado->delete();

        return redirect()->route('chamado.index');
    }
}
