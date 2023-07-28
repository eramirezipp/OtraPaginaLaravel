@extends('layouts.principal')


@section('main')
    <a href="{{route('productos.create')}}" class="btn btn-primary mb-3">Registra tu producto</a>
    <table class='table'>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Codigo</th>
                <th>Codigo</th>
                <th>Codigo</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->codigo_producto}}</td>
                    <td>{{$producto->nombre_producto}}</td>
                    <td>{{$producto->Description}}</td>
                    <td>{{$producto->codigo_producto}}</td>
                    <td>{{$producto->codigo_producto}}</td>
                    <td>{{$producto->codigo_producto}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
