<?php

use App\Http\Controllers\RiscoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\StatusController;

Route::get('/riscos', [RiscoController::class, 'index']);            // Exibir todos os riscos
Route::get('/riscos/create', [RiscoController::class, 'create']);     // Exibir formulário de criação de risco
Route::post('/riscos', [RiscoController::class, 'store']);            // Salvar novo risco
Route::get('/riscos/{id}/edit', [RiscoController::class, 'edit']);    // Exibir formulário de edição de risco
Route::put('/riscos/{id}', [RiscoController::class, 'update']);       // Atualizar risco
Route::delete('/riscos/{id}', [RiscoController::class, 'destroy']);   // Excluir risco


Route::get('chamado', [ChamadoController::class, 'index'])->name('chamado.index');          // Exibe a lista de chamados
Route::get('chamado/create', [ChamadoController::class, 'create'])->name('chamado.create');    // Exibe o formulário para criar um chamado
Route::post('chamado', [ChamadoController::class, 'store'])->name('chamado.store');            // Cria um novo chamado
Route::get('chamado/{id}', [ChamadoController::class, 'show'])->name('chamado.show');          // Exibe um chamado específico
Route::get('chamado/{id}/edit', [ChamadoController::class, 'edit'])->name('chamado.edit');      // Exibe o formulário de edição
Route::put('chamado/{id}', [ChamadoController::class, 'update'])->name('chamado.update');      // Atualiza um chamado existente
Route::delete('chamado/{id}', [ChamadoController::class, 'destroy'])->name('chamado.destroy');  // Deleta um chamado


Route::get('status', [StatusController::class, 'index'])->name('status.index');
Route::get('/status/create', [StatusController::class, 'create'])->name('status.create');

Route::get('status/{id}', [StatusController::class, 'show'])->name('status.show');
Route::get('status/{id}/edit', [StatusController::class, 'edit'])->name('status.edit');
Route::delete('status/{id}', [StatusController::class, 'destroy'])->name('status.destroy');
Route::post('/status/store', [StatusController::class, 'store'])->name('status.store');
Route::put('status/{id}', [StatusController::class, 'update'])->name('status.update'); 
