@extends('adminlte::page')
@section('title', 'Departamentos')
@section('content_header')
    <h1>Registrar Departamentos</h1>
@stop
@section('content')
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nombre del Departamento: </label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="location">Locación: </label>
                            <input type="text" id="location" name="location" class="form-control" required>
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
