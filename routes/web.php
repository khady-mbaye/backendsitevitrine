<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProduitController;

Route::get('/produits', [ProduitController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
