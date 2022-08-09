@extends('menu')

@section('plantilla')

@if (empty(session('guardado')))
    
@else  
    <div class="ui teal message">
        <i class="close icon"></i>
            <div class="header">
                {{ session('guardado') }}
            </div>
    </div>
@endif
     
    <h1>PRODUCTOS</h1>

    <table class="ui blue table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Proveedor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($objetoretornado as $producto)
            <tr>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->proveedor_id }}</td>
                <td>
                   <a href="#"><i class="trash alternate icon"></i></a>
                    <a href="#"><i class="sync alternate icon"></i></a>
                    <i class="eye icon"></i>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

    @if ($objetoretornado->lastPage() > 1)
            {{ $objetoretornado->links() }}
    @endif

@endsection

