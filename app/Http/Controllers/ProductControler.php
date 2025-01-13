<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Validator;

class ProductControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresoproductos = ProductModel::all();
        
        return view('crudproductos.index', compact('ingresoproductos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudproductos.create');
    }


    public function store(Request $request)
    {
        $val = Validator::make($request->all(),[
            'producto' => 'alpha_dash',
            'descripcion_producto' => 'alpha_num',
            'valor' => 'required',
            'cantidad' => 'numeric',
        ]);
        if($val->fails()){
            return redirect()->back()->withErrors($val->errors())->withInput();
        }else{
            ProductModel::create($request->all());
            return redirect()->route('ingresoproductos.index')->with('success', 'Ingreso creado exitosamente.');
        }
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
        $ingreso = ProductModel::findOrFail($id);
        return view('crudproductos.edit', compact('ingreso'));
    }

    public function update(Request $request, $id)
    {
        $ingreso = ProductModel::findOrFail($id);
        $ingreso->update($request->all());
        return redirect()->route('ingresoproductos.index')->with('success', 'Producto actualizado correctamente');
    }

   
    public function destroy($id)
    {
        $ingreso = ProductModel::findOrFail($id);
        $ingreso->delete();
        return redirect()->route('ingresoproductos.index')->with('success', 'Producto eliminado correctamente');
    }
}
