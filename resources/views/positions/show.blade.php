@extends('adminlte::page')
@section('title', 'Datos del Cargo')
@section('content_header')
    <h1>Detalles del Cargo</h1>
@stop

@section('content')
    <div class="card bg-gradient-dark shadow">
        <div class="card-header">
            <h1 class="card-title">{{ $position->title }}</h1>
            <div class="card-tools">
                <a href="{{ route('positions.edit', $position) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Editar</a>
                <form action="{{ route('positions.destroy', $position) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Eliminar</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <p><strong>Título: </strong>{{ $position->title }}</p>
            <p><strong>Descripción: </strong>{{ $position->description }}</p>
            <div class="text-center">
                <a href="{{ route('positions.index') }}" class="btn btn-light btn-sm"><i class="fas fa-arrow-left"></i> Volver</a>
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
