@extends('adminlte::page')
@section('title', 'Curso')
@section('content_header')
    <h1>Registrar Curso</h1>
@stop
@section('content')
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="titulo">Titulo:</label>
                            <input type="text" id="titulo" name="titulo" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nivel">Nivel:</label>
                            <input type="text" id="nivel" name="nivel" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Capacidad de estudiantes:</label>
                            <input type="number" id="cantidad" name="cantidad" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion:</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control" required>
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
