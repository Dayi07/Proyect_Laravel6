<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    public function ViewCli()
    {
        $objetoretornado = App\Cliente::paginate(10);
        return view('Cliente/view', compact('objetoretornado'));
    }
 
 
    public function InsertCli(Request $cliente)
    {
        $cliente->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'telefono' => 'required|numeric',
            'documento' => 'required',
        ]);

        $instanciacliente = new App\Cliente;

        $ruta = Storage::disk('public')->put('Cliente', $cliente->file('foto'));
        $unavariable = asset($ruta);

        $instanciacliente->nombre = $cliente->nombre;
        $instanciacliente->apellido = $cliente->apellido;
        $instanciacliente->direccion = $cliente->direccion;
        $instanciacliente->telefono = $cliente->telefono;
        $instanciacliente->documento = $cliente->documento;
        $instanciacliente->foto = $unavariable;
        $instanciacliente->foto_url = $unavariable;
        $instanciacliente->save();

        return redirect('Cliente/view')->with('guardado', 'El cliente fue guardado con exito!');
 
    }

    public function show($id)
    {  
        $objetocliente = App\Cliente::findOrFail($id);
        return view('Cliente/view', compact('objetocliente'));
    }
}
