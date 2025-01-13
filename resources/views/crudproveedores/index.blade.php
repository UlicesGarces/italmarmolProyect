@extends('layouts.app')

@section('title', 'Reporte de Proveedores')

@section('content')
<div class="container">
    <h1 class="text-center">
        <span class="titulofuncion">REPORTE</span>
        <span class="titulofuncion">DE PROVEEDORES</span>
    </h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="text-end mb-3">
        <a class="btn btn-success" href="{{ route('proveedores.create') }}">Ingresar Proveedor</a>
    </div>

    <table class="table table-bordered tablereporte nodesbordar">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Acciones</th>
            
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $ingresop)
            <tr>
                <td>{{ $ingresop->id }}</td>
                <td>{{ $ingresop->nombre }}</td>
                <td>{{ $ingresop->direccion }}</td>
                <td>{{ $ingresop->ciudad }}</td>
    
                <td>
                    <a class="btn btn-primary" href="{{ route('proveedores.edit', $ingresop) }}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <form action="{{ route('proveedores.destroy', $ingresop->id) }}" method="POST" style="display:inline-block;">
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
