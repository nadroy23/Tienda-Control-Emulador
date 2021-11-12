<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['empleados'] = Empleados::paginate(10);

        return view('empleados.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datos = request()->all();
        $datos = request()->except('_token');
        if ($request->hasFile('Imagen')){
            $datos['Imagen']=$request->file('Imagen')->store('uploads','public');
        }
        Empleados::insert($datos);
        //return response()->json($datos);
        return redirect('empleados')->with('Mensaje','Agregado con Exito...');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleados::findOrFail($id);

        return view('empleados.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token','_method']);
        if ($request->hasFile('Imagen')){
            $empleado = Empleados::findOrFail($id);
            Storage::delete('public/'.$empleado->imagen);
            $datos['Imagen']=$request->file('Imagen')->store('uploads','public');
        }
        Empleados::where('id','=',$id)->update($datos);

        $empleado = Empleados::findOrFail($id);
        return view('empleados.edit',compact('empleado'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleados::findOrFail($id);
        if(Storage::delete('public/'.$empleado->imagen)){
            Empleados::destroy($id);
        }
        return redirect('empleados');
    }
}
