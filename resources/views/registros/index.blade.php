@extends('adminlte::page')
@section('title', 'registro')
@section('content_header')
    <h1>Registros</h1>
@stop
@section('content')
    <a href="{{route('registros.create')}}" class="btn btn-primary">Nuevo Registroo</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($registros as $Registro)
                <tr>
                    <td>{{$Registro->id}}</td>
                    <td>{{$Registro->name}}</td>
                    <td>{{$Registro->description}}</td>
                    <td>{{$Registro->price}}</td>
                    <td>
                        <a href="{{route('registros.edit', $Registro)}}" class="btn btn-light btn-sm"></a>
                        <a href="{{route('registros.show', $Registro)}}" class="btn btn-info btn-sm"><i class="fa fa-user"></i></a>
                        <form action="{{route('registros.destroy', $Registro)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
