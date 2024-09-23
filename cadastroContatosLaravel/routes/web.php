<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/contatos');
});

Route::resource('contatos',App\Http\Controllers\ContatoController::class)->except(['show']);

