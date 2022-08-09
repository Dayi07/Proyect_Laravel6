<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class SalarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rol = auth()->user()->rol;
        if ($rol == "Administrador") {
            $objetoretornado = App\Salario::paginate(10);
            return view('Salario/view', compact('objetoretornado'));
        }else{
            $cedula = auth()->user()->cedula;
            $objetoretornado = App\Salario::where('cedula', $cedula)->paginate(10);
            return view('Salario/view', compact('objetoretornado'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Salario/insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $salario)
    {               
        $instanciasalario = new App\salario;
        $instanciasalario->salario = $salario->salario;
        $instanciasalario->fecha = $salario->fecha;
        $instanciasalario->cedula = $salario->cedula;
        $instanciasalario->save();

        return redirect('salario')->with('guardado', 'El salario fue guardado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
