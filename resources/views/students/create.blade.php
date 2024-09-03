@extends('adminlte::page')
@section('title', 'Estudiantes')
@section('content_header')
    <h1>Registrar Estudiantes</h1>
@stop
@section('content')
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electronico:</label>
                            <input type="text" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono:</label>
                            <input type="number" id="telefono" name="telefono" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="edad">Edad:</label>
                            <input type="number" id="edad" name="edad" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="ci">ci:</label>
                            <input type="number" id="ci" name="ci" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@stop
<style>
    .card {
        padding-left: 20px;
        padding-right: 20px;
    }
</style>
