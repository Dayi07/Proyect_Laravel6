@extends('menu')

@section('plantilla')
       
<main class="form-signin w-100 m-auto">
         <h1 class="h3 mb-3 fw-normal">Registrar producto</h1>
     <form action="{{ route('InsertarProducto') }}" method="POST" enctype="multipart/form-data">
      @csrf

      @if ($errors->any())
        <div class="ui orange message">
          @foreach ($errors->all() as $e)
            {{$e}}<br>
          @endforeach
        </div>
      @endif


      <div class="form-floating">
        <input type="text" class="form-control" id="nombre" name="nombre">
        <label for="floatingInput">Nombre</label>
      </div>

      <div class="form-floating">
        <input type="number" class="form-control" id="precio" name="precio">
        <label for="floatingInput">Precio</label>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" id="descripcion" name="descripcion">
        <label for="floatingInput">Descripcion</label>
      </div>

      <div class="form-floating">
        <select type="text" class="form-control" id="proveedor" name="proveedor">
            <option value="">Seleccione</option>
            @foreach ($infoproveedor as $proveedor)
            <option value="{{ $proveedor->id }}">{{$proveedor->nombre}} </option>
            @endforeach
        </select>
        <label for="floatingInput"">Proveedor</label>
      </div> 

      <div class="form-floating">
        <input type="file" class="form-control" id="foto" name="foto" accept=".jpg , .png , .gif">
        <label for="floatingInput">Foto</label>
      </div>

  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Registrar producto</button>
    </form>
  </main> 

@endsection