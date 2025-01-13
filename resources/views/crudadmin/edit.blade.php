@extends('layouts.app')

@section('title', 'Editar Administrador')

@section('content')
<div class="container">
    <h1 class="text-center">Editar Administrador</h1>
    <form action="{{ route('admingenerate.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="cedula" class="form-label">Cédula</label>
            <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $admin->cedula }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $admin->email }}" required>
        </div>
        <div class="mb-3">
            <label for="tipo_administrador" class="form-label">Tipo de Administrador</label>
            <input type="text" class="form-control" id="tipo_administrador" name="tipo_administrador" value="{{ $admin->tipo_administrador }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('admingenerate.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
