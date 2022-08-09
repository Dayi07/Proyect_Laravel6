@extends('menu');
@section('plantilla')
       
<main class="form-signin w-100 m-auto">
    <h1 class="h3 mb-3 fw-normal">Insertar cliente</h1>
    <form action="{{ route('InsertCliente') }}" method="POST" enctype="multipart/form-data">
      @csrf
      
      @if ($errors->any())
        <div class="ui orange message">
          @foreach ($errors->all() as $e)
                  {{$e}}<br>
          @endforeach
        </div>
      @endif
       
      <div class="form-floating">
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">    
        <label for="floatingInput">Nombre</label> 
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido') }}">    
        <label for="floatingInput">Apellido</label> 
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion') }}">
        <label for="floatingPassword">Direccion</label>
      </div>

      <div class="form-floating">
        <input type="number" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}">
        <label for="floatingPassword">Telefono</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" id="documento" name="documento" value="{{ old('documento') }}">
        <label for="floatingPassword">Documento</label>
      </div>

      <div class="form-floating">
        <input type="file" class="form-control" id="foto" name="foto" accept=".jpg , .png , .gif">
        <label for="floatingInput">Foto</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Registrar</button>
    </form>
  </main> 
 
@endsection
