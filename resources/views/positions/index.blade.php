@extends('adminlte::page')
@section('title', 'Cargps')
@section('content_header')
    <h1>Cargos</h1>
@stop
@section('content')
    <a href="{{route('positions.create')}}" class="btn btn-primary">Registrar Cargo</a>
    <div class="tabla row justify-content-center">
        <table class="table table-striped">
            <thead>
                <th width="30px">Nro.</th>
                <th>Título: </th>
                <th>Descripción</th>
                <th>Opciones</th>
            <tbody>
                @foreach ($positions as $position)
                    <tr>
                        <td>{{$position->id}}</td>
                        <td>{{$position->title}}</td>
                        <td>{{$position->description}}</td>
                        <td>
                            <a href="{{route('positions.edit', $position)}}" class="btn btn-light btn-sm"><i class="fa fa-file"></i></a>
                            <a href="{{route('positions.show', $position)}}" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
                            <form action="{{route('positions.destroy', $position)}}" method="POST" style="display: inline">
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
