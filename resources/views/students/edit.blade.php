@extends('adminlte::page')

@section('title', 'Editar Estudiante')

@section('content_header')
    <h1>Editar Estudiante</h1>
@stop

@section('content')
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre', $student->nombre) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electronico:</label>
                            <input type="text" id="email" name="email" class="form-control" value="{{ old('email', $student->email) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono:</label>
                            <input type="number" id="telefono" name="telefono" class="form-control" value="{{ old('telefono', $student->telefono) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="edad">Edad:</label>
                            <input type="number" id="edad" name="edad" class="form-control" value="{{ old('edad', $student->edad) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="ci">CI:</label>
                            <input type="number" id="ci" name="ci" class="form-control" value="{{ old('ci', $student->ci) }}" required>
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

