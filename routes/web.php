<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaController;

Route::get('/', function () {
    return redirect()->route('ofertas.index');
});

Route::resource('ofertas', OfertaController::class);