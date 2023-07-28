@extends('layouts.principal')


@section('main')
    <form method="POST" action="{{route('productos.store')}}">
        @csrf
        <div class="mb-3">
            <label for="codigo_producto" class="form-label">Codigo del producto</label>
            <input type="text" class="form-control" id="codigo_producto" name="codigo_producto" required>
        </div>
        <div class="mb-3">
            <label for="nombre_producto" class="form-label">Codigo del producto</label>
            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" required>
        </div>
        <div class="mb-3">
            <label for="Description" class="form-label">Codigo del producto</label>
            <input type="text" class="form-control" id="Description" name="Description" required>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Codigo del producto</label>
            <input type="text" class="form-control" id="precio" name="precio" required>
        </div>
        <div class="mb-3">
            <label for="codigo_producto" class="form-label">Codigo del producto</label>
            <input type="text" class="form-control" id="codigo_producto" name="codigo_producto" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar producto</button>
    </form>
@endsection
