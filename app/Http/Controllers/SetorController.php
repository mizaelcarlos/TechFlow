<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setor;

class SetorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setores = Setor::all();
        return view('setor.index', compact('setores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('setor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Setor::create($request->all());
        return redirect()->route('setor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $setor = Setor::find($id);
        return view('setor.show', compact('setor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $setor = Setor::find($id);
        return view('setor.edit', compact('setor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $setor = Setor::find($id);
        $setor->update($request->all());
        return redirect()->route('setor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Setor::find($id)->delete();
        return redirect()->route('setor.index');
    }
}
