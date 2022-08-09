<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
 
class ProductoController extends Controller
{
    public function ViewProd()
    {
        $objetoretornado = App\Producto::paginate(10);
        return view('Producto/view', compact('objetoretornado'));
    }

    public function ViewInsertProd( )
    {
        $infoproveedor = App\Proveedor::all();

        return view('Producto/insert', compact('infoproveedor'));
    }
 
    public function InsertProd(Request $producto)
    {
        $producto->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'descripcion' => 'required',
        ]);

        $instanciaproducto = new App\Producto;

        $ruta = Storage::disk('public')->put('Producto', $producto->file('foto'));
        $unavariable = asset($ruta);

        $instanciaproducto->nombre = $producto->nombre;
        $instanciaproducto->precio = $producto->precio;
        $instanciaproducto->descripcion = $producto->descripcion;
        $instanciaproducto->proveedor_id = $producto->proveedor;
        $instanciaproducto->foto = $unavariable;
        $instanciaproducto->foto_url = $unavariable;
        $instanciaproducto->save();

       return redirect('Producto/view')->with('guardado', 'Producto insertado con exito');


    }
}
