@extends('adminlte::page')
@section('title', 'Detalles de la Inscripción')
@section('content_header')
    <h1>Detalles de la Inscripción</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark shadow">
        <div class="card-header">
            <h1 class="card-title">{{ $inscription->student->nombre }} - {{ $inscription->course->titulo }}</h1>
            <div class="card-tools">
                <a href="{{ route('inscriptions.edit', $inscription) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Editar</a>
                <form action="{{ route('inscriptions.destroy', $inscription) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Primera columna -->
                <div class="col-md-6">
                    <p><strong>Estudiante: </strong>{{ $inscription->student->nombre }}</p>
                    <p><strong>Curso: </strong>{{ $inscription->course->titulo }}</p>
                    <p><strong>Fecha de Inscripción: </strong>{{ $inscription->fecha_ins }}</p>
                    <p><strong>Descripción: </strong>{{ $inscription->descripcion }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('inscriptions.index') }}" class="btn btn-light btn-sm"><i class="fas fa-arrow-left"></i> Volver</a>
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
