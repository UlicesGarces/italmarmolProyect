<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Validator;

class AdminControler extends Controller
{
    public function index()
    {
        $admingenerate = AdminModel::all();
        return view('crudadmin.index', compact('admingenerate'));
    }

    public function create()
    {
        return view('crudadmin.create');
    }

    public function store(Request $request)
    {
        $val = Validator::make($request->all(),[
            'cedula' => 'alpha_dash',
            'email' => 'email',
            'tipo_administrador' => 'alpha',
        ]);
        if($val->fails()){
            return redirect()->back()->withErrors($val->errors())->withInput();
        }else{
            AdminModel::create($request->all());
            return redirect()->route('admingenerate.index')->with('success', 'Administrador creado exitosamente.');
        }
    }

    public function edit($id)
    {
        $admin = AdminModel::findOrFail($id);
        return view('crudadmin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $admin = AdminModel::findOrFail($id);
        $admin->update($request->all());
        return redirect()->route('admingenerate.index')->with('success', 'Administrador actualizado correctamente');
    }

    public function destroy($id)
    {
        $admin = AdminModel::findOrFail($id);
        $admin->delete();
        return redirect()->route('admingenerate.index')->with('success', 'Administrador eliminado correctamente');
    }
}
