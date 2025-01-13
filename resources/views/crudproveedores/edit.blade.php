@extends('layouts.app')

@section('title', 'Editar Proveedor')

@section('content')
<div class="container">
    <h1 class="text-center">Editar Proveedor</h1>
    <form action="{{ route('proveedores.update', $ingresop->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Producto</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $ingresop->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Descripción del Producto</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $ingresop->direccion }}" required>
        </div>
        <div class="mb-3">
            <label for="ciudad" class="form-label">Precio</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ $ingresop->ciudad }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection