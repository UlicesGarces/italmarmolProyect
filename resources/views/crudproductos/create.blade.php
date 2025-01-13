@extends('layouts.app')

@section('title', 'Ingresar Producto')

@section('content')
<div class="container">
    <h1 class="text-center">Ingresar Producto</h1>
    <form action="{{ route('ingresoproductos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="producto" class="form-label">Producto</label>
            <input type="text" class="form-control" id="producto" name="producto" value="{{old('producto')}}" required>
            @error('producto')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="descripcion_producto" class="form-label">Descripción Producto</label>
            <input type="text" class="form-control" id="descripcion_producto" name="descripcion_producto" value="{{old('descripcion_producto')}}" required>
            @error('descripcion_producto')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Precio</label>
            <input type="text" class="form-control" id="valor" name="valor" value="{{old('valor')}}" pattern="\$\d+(,\d{0-1000})?" required>
            @error('valor')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{old('cantidad')}}" required>
            @error('cantidad')
                <p>{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
        <a href="{{ route('admingenerate.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
