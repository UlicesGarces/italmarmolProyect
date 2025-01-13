@extends('layouts.app')

@section('title', 'Reporte de Administradores')

@section('content')
<div class="container">
    <h1 class="text-center">
        <span class="titulofuncion">REPORTE</span>
        <span class="titulofuncion">DE ADMINISTRADOR</span>
    </h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="text-end mb-3">
        <a class="btn btn-success" href="{{ route('admingenerate.create') }}">Crear</a>
    </div>

<!-- boton regresar
    <div class="text-end mb-3">
        <a class="btn btn-success" href="{{ route('admingenerate.index') }}">Regresar</a>
    </div>
-->
    <table class="table table-bordered tablereporte nodesbordar">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Cédula</th>
                <th>Email</th>
                <th>Tipo de administrador</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admingenerate as $admin)
            <tr>
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->cedula }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->tipo_administrador }}</td>
                <td>
                    
                    <a class="btn btn-primary" href="{{ route('admingenerate.edit', $admin) }}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <form action="{{ route('admingenerate.destroy', $admin->id) }}" method="POST" style="display:inline-block;">
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
