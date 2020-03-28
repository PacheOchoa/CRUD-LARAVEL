<?php

namespace App\Http\Controllers;

use App\Medico;
use Illuminate\Http\Request;
use App;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicos = App\Medico::paginate(1);

        return view('welcome',['medicos' => $medicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $crear = new Medico();
        $crear->nombre = $request->nombre;
        $crear->edad = $request->edad;
        $crear->especialidad = $request->especialidad;

        $crear->save();

        return back()->with('store','el medico ha sido creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show(Medico $medico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $medico = App\Medico::findOrFail($id);

        return view('editar',compact('medico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $medico = App\Medico::findOrFail($id);
        $medico->nombre = $request->nombreU;
        $medico->edad = $request->edadU;
        $medico->especialidad = $request->especialidadU;

        $medico->save();

        return back()->with('update','El medico ha sido actualizado');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $medico = App\Medico::findOrFail($id);
        $medico->delete();

        return back()->with('eliminar','El medico ha sido eliminado');

    }
}
