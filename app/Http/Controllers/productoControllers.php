<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\productoControllers;
use App\Models\productos;

class productoControllers extends Controller
{
    public function showProducto(Request $REQUEST){

        $producto = productos::all();

         return view ('welcome', compact('producto'));
               
    }

    public function delete($id){
        $producto = productos::find($id);
        $producto->delete();
        return back();
    }

    public function edit($id){
        $producto = productos::find($id);
        return view('productos.producto', compact('producto'));
    }

    public function update($id, Request $request){
        $producto = productos::find($id);
        $producto -> nombreproducto = $request->prod;
        $producto -> precio = $request->precio;
        $producto -> cantidad = $request ->cantidad;
        $producto -> Save();
        return redirect("/");
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
