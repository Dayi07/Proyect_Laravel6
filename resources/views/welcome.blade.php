@extends('menu')
@section('plantilla')

<center>
    <div class="centrar">
        <h1>Bienvenido a la Papeleria Don Chucho!</h1>
        <h2></h2>
        <h2>Usted ingreso como:{{ $sessionactiva->name }} </h2>
        <h2>Su correo es: {{ $sessionactiva->email }}</h2>
        <h2>El rol actual es: {{ $sessionactiva->rol }}</h2>
        <br><br>
        <img src="{{ asset('img/papeleria.jpg') }}" alt="">
    </div>
</center>

@endsection

