<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productoControllers;


Route::get('/', [productoControllers::class, 'showProducto']);
Route::post('/save', [productoControllers::class, 'store']);
Route::delete('/delete/{id}', [productoControllers::class, 'delete']);
Route::get('/edit/producto/{id}', [productoControllers::class, 'edit']);
Route::put('/producto/update/{id}', [productoControllers::class, 'update']);


