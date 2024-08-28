@extends('adminlte::page')
@section('title', 'Proveedores')
@section('content_header')
    <h1>Proveedores</h1>
@stop
@section('content')
    <a href="{{route('suppliers.create')}}" class="btn btn-primary">Registrar Proveedor</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre</th>
            <th>Gmail</th>
            <th>telefono</th>
            <th>Direccion</th>
        <tbody>
            @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{$supplier->id}}</td>
                    <td>{{$supplier->name}}</td>
                    <td>{{$supplier->email}}</td>
                    <td>{{$supplier->phone}}</td>
                    <td>{{$supplier->address}}</td>
                    <td>
                        <a href="{{route('suppliers.edit', $supplier)}}" class="btn btn-light btn-sm"><i class="fa fa-file"></i></a>
                        <a href="{{route('suppliers.show', $supplier)}}" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
                        <form action="{{route('suppliers.destroy', $supplier)}}" method="POST" style="display: inline">
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