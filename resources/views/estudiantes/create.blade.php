@extends('adminlte::page')
@section('title', 'Estudiantes')
@section('content_header')
    <h1>Registrar Estudiante</h1>
@stop
@section('content')
    <form action="{{ route('estudiantes.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nombre">Nombres</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellidos</label>
                            <input type="text" id="apellido" name="apellido" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha_na">Fecha de Nacimiento</label>
                            <input type="date" id="fecha_na" name="fecha_na" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="ci">CI</label>
                            <input type="text" id="ci" name="ci" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo Electrónico</label>
                            <input type="email" id="correo" name="correo" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" id="direccion" name="direccion" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Nro de Teléfono o Celular</label>
                            <input type="text" id="telefono" name="telefono" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="carrera">Carrera</label>
                            <input type="text" id="carrera" name="carrera" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="semestre">Semestre</label>
                            <input type="text" id="semestre" name="semestre" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="notas">Notas</label>
                            <input type="text" id="notas" name="notas" class="form-control" required>
                        </div>
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
    .card{
        padding-left: 20px;
        padding-right: 20px;
    }
</style>

