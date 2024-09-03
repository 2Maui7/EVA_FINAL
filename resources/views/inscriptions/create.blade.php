@extends('adminlte::page')
@section('title', 'Registrar Inscripción')
@section('content_header')
    <h1>Registrar Inscripción</h1>
@stop
@section('content')
    <form action="{{ route('inscriptions.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <<div class="form-group">
                            <label for="student_id">Estudiante:</label>
                            <select id="student_id" name="student_id" class="form-control" required>
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="course_id">Curso:</label>
                            <select id="course_id" name="course_id" class="form-control" required>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->titulo }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fecha_ins">Fecha de Inscripción:</label>
                            <input type="date" id="fecha_ins" name="fecha_ins" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control" required>
                            
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
    .card {
        padding-left: 20px;
        padding-right: 20px;
    }
</style>
