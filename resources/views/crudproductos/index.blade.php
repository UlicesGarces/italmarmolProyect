@extends('layouts.app')

@section('title', 'Reporte de Productos')

@section('content')
<div class="container">
    <h1 class="text-center">
        <span class="titulofuncion">REPORTE</span>
        <span class="titulofuncion">DE PRODUCTOS</span>
    </h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="text-end mb-3">
        <a class="btn btn-success" href="{{ route('ingresoproductos.create') }}">Ingresar</a>
    </div>
 <!-- boton regresar
  // <div class="text-end mb-3">
        <a class="btn btn-success" href="{{ route('ingresoproductos.index') }}">Regresar</a>
    </div>
  -->
    <table class="table table-bordered tablereporte nodesbordar">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Producto</th>
                <th>Descripción del producto</th>
                <th>Valor</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ingresoproductos as $ingreso)
            <tr>
                <td>{{ $ingreso->id }}</td>
                <td>{{ $ingreso->producto }}</td>
                <td>{{ $ingreso->descripcion_producto }}</td>
                <td>{{ $ingreso->valor }}</td>
                <td>{{ $ingreso->cantidad }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('ingresoproductos.edit', $ingreso) }}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <form action="{{ route('ingresoproductos.destroy', $ingreso->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
