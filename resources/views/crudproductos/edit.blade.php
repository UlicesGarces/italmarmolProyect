@extends('layouts.app')

@section('title', 'Editar Producto')

@section('content')
<div class="container">
    <h1 class="text-center">Editar Producto</h1>
    <form action="{{ route('ingresoproductos.update', $ingreso->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="producto" class="form-label">Producto</label>
            <input type="text" class="form-control" id="producto" name="producto" value="{{ $ingreso->producto }}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion_producto" class="form-label">Descripción del Producto</label>
            <input type="text" class="form-control" id="descripcion_producto" name="descripcion_producto" value="{{ $ingreso->descripcion_producto }}" required>
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Precio</label>
            <input type="text" class="form-control" id="valor" name="valor" value="{{ $ingreso->valor }}" required>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="cantidad" class="form-control" id="cantidad" name="cantidad" value="{{ $ingreso->cantidad }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('ingresoproductos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection