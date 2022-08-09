@extends('menu');
@section('plantilla')


<main class="form-signin w-100 m-auto">
  <h1 class="h3 mb-3 fw-normal">Registrar salario de empleado</h1>
    <form action="{{ route('salario.store') }}" method="POST">
      @csrf
             

      @error('salario')
        <br>
        <div class="ui orange message">Este campo es obligatorio </div>
      @enderror
      <div class="form-floating">
        <input type="number" class="form-control" id="salario" name="salario" value="{{ old('salario') }}">    
        <label for="floatingInput">Salario</label> 
      </div>

      @error('fecha')
        <div class="ui orange message">Este campo es obligatorio </div>
      @enderror
      <div class="form-floating">
        <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}">
        <label for="floatingInput">Fecha de pago</label>
      </div>

      @error('cedula')
        <div class="ui orange message">Este campo es obligatorio </div>
      @enderror
      <div class="form-floating">
        <input type="number" class="form-control" id="cedula" name="cedula" value="{{ old('cedula') }}">
        <label for="floatingInput">Cedula</label>
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
    </form>
  </main> 

@endsection
