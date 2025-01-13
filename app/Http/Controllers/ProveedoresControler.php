<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;
use Illuminate\Support\Facades\Validator;

class ProveedoresControler extends Controller
{

    public function index()
    {
        //
        $proveedores = Proveedores::all();
        
        return view('crudproveedores.index', compact('proveedores'));
        //return $proveedores;
    }
    public function create()
    {
        return view('crudproveedores.create');
    }
    public function store(Request $request)
    {
        $val = Validator::make($request->all(),[
            'nombre' => 'alpha',
            'direccion' => 'alpha_dash',
            'ciudad' => 'alpha',
        ]);
        if($val->fails()){
            return redirect()->back()->withErrors($val->errors())->withInput();
        }else{
        Proveedores::create($request->all());
        return redirect()->route('proveedores.index')->with('success', 'Ingreso creado exitosamente.');
        }
    }
   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ingresop = Proveedores::findOrFail($id);
        return view('crudproveedores.edit', compact('ingresop'));
    }

    public function update(Request $request, $id)
    {
        $ingresop = Proveedores::findOrFail($id);
        $ingresop->update($request->all());
        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado exitosamente');
    }

    public function destroy($id)
    {
        $ingresop = Proveedores::findOrFail($id);
        $ingresop->delete();
        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminado correctamente');
    }

}    
