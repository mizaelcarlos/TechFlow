<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status; // Modelo Status

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Exibe todos os Status
        $status = Status::all();
        return view('status.index', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Exibe o formulário de criação
        return view('status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Cria um novo Status com os dados enviados
        Status::create($request->all());  // Assumindo que o campo é 'nome'
        return redirect()->route('status.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Exibe um Status específico
        $status = Status::findOrFail($id);
        return view('status.show', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Exibe o formulário para editar um Status
        $status = Status::findOrFail($id);
        return view('status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Atualiza o Status
        $status = Status::findOrFail($id);
        $status->update($request->all());  // Atualiza o campo 'nome'
        return redirect()->route('status.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Deleta um Status
        Status::findOrFail($id)->delete();
        return redirect()->route('status.index');
    }
}
