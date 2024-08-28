@extends('adminlte::page')
@section('title', 'Departamentos')
@section('content_header')
    <h1>Departamentos</h1>
@stop
@section('content')
    <a href="{{route('departments.create')}}" class="btn btn-primary">Registrar Departamento</a>
    <div class="tabla row justify-content-center">
        <table class="table table-striped">
            <thead>
                <th width="30px">Nro.</th>
                <th>Nombre: </th>
                <th>Location</th>
                <th>Opciones</th>
            <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{$department->id}}</td>
                        <td>{{$department->name}}</td>
                        <td>{{$department->location}}</td>
                        <td>
                            <a href="{{route('departments.edit', $department)}}" class="btn btn-light btn-sm"><i class="fa fa-file"></i></a>
                            <a href="{{route('departments.show', $department)}}" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
                            <form action="{{route('departments.destroy', $department)}}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
<style>
    .tabla{
        padding-left:10%;
        padding-right:10%;
    }
</style>