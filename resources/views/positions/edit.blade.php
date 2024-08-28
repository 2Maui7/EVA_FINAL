@extends('adminlte::page')

@section('title', 'Editar Cargo')

@section('content_header')
    <h1>Editar Cargo</h1>
@stop

@section('content')
    <form action="{{ route('positions.update', $position->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Título:</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $position->title) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea id="description" name="description" class="form-control" required>{{ old('description', $position->description) }}</textarea>
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
