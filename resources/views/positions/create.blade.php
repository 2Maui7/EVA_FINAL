@extends('adminlte::page')
@section('title', 'Cargo')
@section('content_header')
    <h1>Registrar Cargo</h1>
@stop
@section('content')
    <form action="{{ route('positions.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Título del Cargo: </label>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="description">Descripción: </label>
                            <textarea id="description" name="description" class="form-control" required></textarea>
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
