<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadoController;

Route::get('/', function () {
    return view('welcome');
});


//Rotas de Chamado
Route::get('chamado', [ChamadoController::class, 'index'])->name('chamado.index');          // Exibe a lista de chamados
Route::get('chamado/create', [ChamadoController::class, 'create'])->name('chamado.create');    // Exibe o formulário para criar um chamado
Route::post('chamado', [ChamadoController::class, 'store'])->name('chamado.store');            // Cria um novo chamado
Route::get('chamado/{id}', [ChamadoController::class, 'show'])->name('chamado.show');          // Exibe um chamado específico
Route::get('chamado/{id}/edit', [ChamadoController::class, 'edit'])->name('chamado.edit');      // Exibe o formulário de edição
Route::put('chamado/{id}', [ChamadoController::class, 'update'])->name('chamado.update');      // Atualiza um chamado existente
Route::delete('chamado/{id}', [ChamadoController::class, 'destroy'])->name('chamado.destroy');  // Deleta um chamado

