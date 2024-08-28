
@extends('adminlte::page')

@section('title','Datos')

@section('content_header')
    <h1>Ver mas</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h1 class="card-title">{{$supplier->name}}</h1>
        </div>
        <div class="card-body">
            <p><strong>Correo: </strong>{{$supplier->email}}</p>
            <p><strong>phone: </strong>{{$supplier->phone}}</p>
            <p><strong>address: </strong>{{$supplier->address}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('suppliers.edit', $supplier)}}" class="btn btn-light btn-sm"><i class="fa fa-file"></i></a>
            <a href="{{route('suppliers.show', $supplier)}}" class="btn btn-info btn-sm"><i class="fa fa-info-circle"></i></a>
            <form action="{{route('suppliers.destroy', $supplier)}}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
            </form>
        </div>
    </div>
@stop
