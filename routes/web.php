<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productoControllers;


Route::get('/', [productoControllers::class, 'showProducto']);
Route::post('/save', [productoControllers::class, 'store']);