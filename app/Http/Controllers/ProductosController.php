<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos'] = Productos::paginate(10);

        return view('productos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
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
            $datos['Imagen']=$request->file('Imagen')->store('product','public');
        }
        Productos::insert($datos);
        //return response()->json($datos);
        return redirect('productos')->with('Mensaje','Agregado con Exito...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Productos::findOrFail($id);

        return view('productos.edit',compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token','_method']);
        if ($request->hasFile('Imagen')){
            $productos = Productos::findOrFail($id);
            Storage::delete('public/'.$productos->imagen);
            $datos['Imagen']=$request->file('Imagen')->store('product','public');
        }
        Productos::where('id','=',$id)->update($datos);

        $productos = Productos::findOrFail($id);
        return view('productos.edit',compact('productos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos = Productos::findOrFail($id);
        if(Storage::delete('public/'.$productos->imagen)){
            Productos::destroy($id);
        }
        return redirect('productos');
    }
}
