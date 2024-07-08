<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\productoControllers;
use App\Models\productos;

class productoControllers extends Controller
{
    public function showProducto(Request $REQUEST){

               return view ('welcome');
               
    }
    public function store(Request $REQUEST){


        $producto = new productos();

        $producto -> nombreproducto = $REQUEST->prod;
        $producto -> precio = $REQUEST->precio;
        $producto -> cantidad = $REQUEST ->cantidad;
        $producto -> Save();
        return back();


       // return view ('welcome');
    }
}
