<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App;
use App\Proveedor;
use Illuminate\Support\Facades\App as FacadesApp;

class ProveedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ViewInsert()
    {
        return view('Proveedor/insert');
    }
     
    public function InsertPro(Request $proveedor){

        $proveedor->validate([
            'nombre' => 'required',
            'telefono' => 'required|numeric',
            'direccion' => 'required'
        ]);
          
        $instanciaproveedor = new App\Proveedor;
        $instanciaproveedor->nombre = $proveedor->nombre;
        $instanciaproveedor->telefono = $proveedor->telefono;
        $instanciaproveedor->direccion = $proveedor->direccion;
        $instanciaproveedor->save();

        return redirect('Proveedor/view')->with('guardado', 'El proveedor fue guardado con exito!');
    }

    public function ViewPro(){

        $objetoretornado = App\Proveedor::paginate(10);
        return view('Proveedor/view', compact('objetoretornado'));
    }

    public function DeletePro( $id )
    {
       $deleteproveedor = App\Proveedor::FindOrFail($id);
        $deleteproveedor->delete();

        return redirect('Proveedor/view')->with('guardado', 'El proveedor fue borrado con exito!');
    }

    public function UpdatePro( $id)
    {
       $updateproveedor = App\Proveedor::FindOrFail($id);

       return view('Proveedor/update', compact('updateproveedor'));
    }

    public function UpdateBdPro(Request $proveedor )
    {
        $instanciaproveedor = App\Proveedor::FindOrFail($proveedor->id);
        $instanciaproveedor->nombre = $proveedor->nombre;
        $instanciaproveedor->telefono = $proveedor->telefono;
        $instanciaproveedor->direccion = $proveedor->direccion;
        $instanciaproveedor->save();

        return redirect('Proveedor/view')->with('guardado', 'El proveedor fue actualizado con exito!');
    }
 
}




























