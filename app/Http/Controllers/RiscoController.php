<?php

namespace App\Http\Controllers;

use App\Models\Risco;
use Illuminate\Http\Request;

class RiscoController extends Controller
{
    
    public function index()
    {
        $riscos = Risco::all(); 
        return view('risco.index', compact('riscos'));  
    }

    public function create()
    {
        return view('risco.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cor' => 'required|string|max:50',
        ]);

        Risco::create($request->all());  
        return redirect()->route('risco.index')->with('success', 'Risco criado com sucesso!');
    }

    public function show($id)
    {
        $risco = Risco::findOrFail($id);  
        return view('risco.show', compact('risco')); 
    }

    public function edit($id)
    {
        $risco = Risco::findOrFail($id);  
        return view('risco.edit', compact('risco')); 
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cor' => 'required|string|max:50',
        ]);

        $risco = Risco::findOrFail($id);  
        $risco->update($request->all());  
        return redirect()->route('risco.index')->with('success', 'Risco atualizado com sucesso!');
    }

 
    public function destroy($id)
    {
        $risco = Risco::findOrFail($id);  
        $risco->delete();  
        return redirect()->route('risco.index')->with('success', 'Risco excluído com sucesso!');
    }
}
