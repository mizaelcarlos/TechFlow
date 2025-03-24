<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('status',[StatusController::class,'index'])->name('status.index');
Route::get('/status/create',[StatusController::class,'create'])->name('status.create');