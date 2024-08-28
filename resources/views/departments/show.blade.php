@extends('adminlte::page')
@section('title', 'Datos del Departamento')
@section('content_header')
    <h1>Detalles del Departamento</h1>
@stop

@section('content')
    <div class="card bg-gradient-dark shadow">
        <div class="card-header">
            <h1 class="card-title">{{ $department->name }}</h1>
            <div class="card-tools">
                <a href="{{ route('departments.edit', $department) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Editar</a>
                <form action="{{ route('departments.destroy', $department) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <p><strong>Nombre: </strong>{{ $department->name }}</p>
            <p><strong>Ubicación: </strong>{{ $department->location }}</p>
            <div class="text-center">
                <a href="{{ route('departments.index') }}" class="btn btn-light btn-sm"><i class="fas fa-arrow-left"></i> Volver</a>
            </div>
        </div>
    </div>
@stop

<style>
    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
    