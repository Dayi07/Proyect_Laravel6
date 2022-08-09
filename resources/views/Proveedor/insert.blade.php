@extends('menu');
@section('plantilla')


<main class="form-signin w-100 m-auto">
  <h1 class="h3 mb-3 fw-normal">Registrar proveedor</h1>
    <form action="{{ route('InsertProveedor') }}" method="POST">
      @csrf
      
      @if ($errors->any())
        <div class="ui orange message">
          @foreach ($errors->all() as $e)
                  {{$e}}<br>
          @endforeach
        </div>
      @endif
       

      @error('nombre')
        <br>
        <div class="ui orange message">Este campo es obligatorio!- </div>
      @enderror
      <div class="form-floating">
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">    
        <label for="floatingInput">Nombre</label> 
      </div>

      @error('telefono')
        <div class="ui orange message">Este campo es obligatorio!- </div>
      @enderror
      <div class="form-floating">
        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('nombre') }}">
        <label for="floatingPassword">Telefono</label>
      </div>

      @error('direccion')
        <div class="ui orange message">Este campo es obligatorio!- </div>
      @enderror
      <div class="form-floating">
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('nombre') }}">
        <label for="floatingPassword">Direccion</label>
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
    </form>
  </main> 

@endsection
