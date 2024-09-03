@extends('adminlte::page')
@section('title', 'Datos del Curso')
@section('content_header')
    <h1>Detalles del Curso</h1>
@stop

@section('content')
    <div class="card bg-gradient-dark shadow">
        <div class="card-header">
            <h1 class="card-title">{{ $course->titulo }}</h1>
            <div class="card-tools">
                <a href="{{ route('courses.edit', $course) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Editar</a>
                <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <p><strong>Titulo: </strong>{{ $course->titulo }}</p>
            <p><strong>nivel: </strong>{{ $course->nivel }}</p>
            <p><strong>Cantidad: </strong>{{ $course->cantidad }}</p>
            <p><strong>Descripcion: </strong>{{ $course->descripcion }}</p>
            <div class="text-center">
                <a href="{{ route('courses.index') }}" class="btn btn-light btn-sm"><i class="fas fa-arrow-left"></i> Volver</a>
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
