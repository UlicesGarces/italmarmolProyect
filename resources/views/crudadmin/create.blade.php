@extends('layouts.app')

@section('title', 'Crear Administrador')

@section('content')
<div class="container">
    <h1 class="text-center">Crear Administrador</h1>
    <form action="{{ route('admingenerate.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cedula" class="form-label">Cédula</label>
            <input type="text" class="form-control" id="cedula" name="cedula" value="{{old('cedula')}}" maxlength="11" pattern="\d+-\d+" required>
            @error('cedula')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" required>
            @error('email')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tipo_administrador" class="form-label">Tipo de Administrador</label>
            <input type="text" class="form-control" id="tipo_administrador" name="tipo_administrador" value="{{old('tipo_administrador')}}" required>
            @error('tipo_administrador')
                <p>{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
        <a href="{{ route('admingenerate.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
