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

    <h1>PAGOS</h1>

    <table class="ui blue table">
        <thead>
            <tr>
                <th>Salario</th>
                <th>Fecha</th>
                <th>Cedula</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($objetoretornado as $salario)
            <tr>
                <td>{{ $salario->salario }}</td>
                <td>{{ $salario->fecha }}</td>
                <td>{{ $salario->cedula }}</td>
                <td>
                   <a href=""><i class="trash alternate icon"></i></a>
                    <a href=""><i class="sync alternate icon"></i></a>
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

