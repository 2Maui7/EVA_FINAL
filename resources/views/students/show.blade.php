@extends('adminlte::page')
@section('title', 'Datos del Estudiante')
@section('content_header')
    <h1>Detalles del Estudiante</h1>
@stop

@section('content')
    <div class="card bg-gradient-dark shadow">
        <div class="card-header">
            <h1 class="card-title">{{ $student->nombre }}</h1>
            <div class="card-tools">
                <a href="{{ route('students.edit', $student) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Editar</a>
                <form action="{{ route('students.destroy', $student) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <p><strong>Nombre: </strong>{{ $student->nombre }}</p>
            <p><strong>Correo Electronico: </strong>{{ $student->email }}</p>
            <p><strong>Telefono: </strong>{{ $student->telefono }}</p>
            <p><strong>Edad: </strong>{{ $student->edad }}</p>
            <p><strong>CI: </strong>{{ $student->ci }}</p>
            <div class="text-center">
                <a href="{{ route('students.index') }}" class="btn btn-light btn-sm"><i class="fas fa-arrow-left"></i> Volver</a>
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
