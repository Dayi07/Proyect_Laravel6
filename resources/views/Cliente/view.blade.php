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

    <h1>CLIENTES</h1>

    <h1>{{ $objetocliente }}</h1>

    <table class="ui blue table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Documento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($objetoretornado as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apellido }}</td>
                <td>{{ $cliente->direccion }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->documento }}</td>
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

