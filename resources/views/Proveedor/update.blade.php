@extends('menu');
@section('plantilla')

<main class="form-signin w-100 m-auto">
    <form action="{{ route('UpdateBdProveedor') }}" method="POST">
      @csrf

      <h1 class="h3 mb-3 fw-normal">Actualizar proveedor</h1>
  
      <div class="form-floating">
        <input type="text" class="form-control" value="{{ $updateproveedor->nombre }}" id="nombre" name="nombre">
        <input type="hidden" class="form-control" value="{{ $updateproveedor->id }}" id="id" name="id">
        <label for="floatingInput">Nombre</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" value="{{ $updateproveedor->telefono }}" id="telefono" name="telefono">
        <label for="floatingPassword">Telefono</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" value="{{ $updateproveedor->direccion }}" id="direccion" name="direccion">
        <label for="floatingPassword">Direccion</label>
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Actualizar</button>
    </form>
  </main> 
@endsection