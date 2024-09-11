<?php

use App\Http\Controllers\ClientController;
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
