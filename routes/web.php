<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\TabelaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get(
    '/clients', [ClientController::class, 'index']
)->name('clients.index');
Route::get(
    '/clients/{id}', [ClientController::class, 'show']
)->name('clients.show');
Route::get(
    '/produtos', [
        ProdutoController::class, 'index'])->name('produtos.index');

        Route::get(
            '/produtos/{id}', [
                ProdutoController::class, 'show'])->name('produtos.show');

Route::get('/produtos/{id}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
// Atualizar o produto
Route::put('/produtos/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
