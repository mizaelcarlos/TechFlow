<?php
use App\Http\Controllers\RiscoController;

Route::get('/riscos', [RiscoController::class, 'index']);            // Exibir todos os riscos
Route::get('/riscos/create', [RiscoController::class, 'create']);     // Exibir formulário de criação de risco
Route::post('/riscos', [RiscoController::class, 'store']);            // Salvar novo risco
Route::get('/riscos/{id}/edit', [RiscoController::class, 'edit']);    // Exibir formulário de edição de risco
Route::put('/riscos/{id}', [RiscoController::class, 'update']);       // Atualizar risco
Route::delete('/riscos/{id}', [RiscoController::class, 'destroy']);   // Excluir risco

