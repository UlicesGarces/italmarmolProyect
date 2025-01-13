@extends('layouts.app')

@section('title', 'Ingresar Proveedores')

@section('content')
<div class="container">
    <h1 class="text-center">Ingresar Proveedor</h1>
    <form action="{{ route('proveedores.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" required>
            @error('nombre')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="{{old('direccion')}}" required>
            @error('direccion')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{old('ciudad')}}" required>
            @error('ciudad')
                <p>{{$message}}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Crear</button>
        <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
