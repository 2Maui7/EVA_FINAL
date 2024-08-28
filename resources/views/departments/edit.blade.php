@extends('adminlte::page')

@section('title', 'Editar Departamento')

@section('content_header')
    <h1>Editar Departamento</h1>
@stop

@section('content')
    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $department->name) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="location">Ubicación:</label>
                            <input type="text" id="location" name="location" class="form-control" value="{{ old('location', $department->location) }}" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
@stop

<style>
    .card {
        padding-left: 20px;
        padding-right: 20px;
    }
</style>