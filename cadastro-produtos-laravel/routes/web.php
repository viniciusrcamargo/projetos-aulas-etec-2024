<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/produtos');
});

Route::resource('categorias', CategoriaController::class)->except(['show']);
Route::resource('produtos', ProdutoController::class)->except(['show']);

