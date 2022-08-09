@extends('menu')

@section('plantilla')


<main class="form-signin w-100 m-auto">
  <h1 class="h3 mb-3 fw-normal">Registrar factura</h1>
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
        <input type="number" class="form-control" id="documento" name="documento" onchange="capturardatos()">    
        <label for="floatingInput">Documento cliente</label> 
      </div>

      <div class="form-floating">
        <label for="floatingInput">Nombre: </label> <br><br>
      </div>

      <div class="form-floating">
        <label for="floatingInput">Apellido: </label> <br><br>
      </div>

      <div class="form-floating">
        <label for="floatingInput">Telefono: </label> <br><br>
      </div>

    <div class="form-floating">
        <label for="floatingInput">Direccion: </label> <br><br><br>
    </div>


    <div class="form-floating">
        <select type="text" class="form-control" id="producto" name="producto">
            <option value=""></option>
            @foreach ($infoproducto as $producto)
            <option value="{{ $producto->id }}"> {{$producto->nombre}} </option>
            @endforeach
        </select>
        <label for="floatingInput"">Seleccione un producto</label>
    </div> <br>

        <div class="form-floating">
            <input type="number" class="form-control" id="cantidadproducto" name="cantidadproducto" value="{{ old('documento') }}">    
            <label for="floatingInput" >Cantidad Producto: </label> 
        </div>
        <br>
        <div class="form-floating">
            <button type="button" class="w-30 btn btn-lg btn-primary"> Agregar al carrito </button>
        </div><br>

        
<div class="ui four cards">
    <div class="card">
        <div class="image">
            <img src="{{asset('img/papeleria.jpg')}}" alt="">
        </div>
        <div class="extra">
            Cantidad:  
            <br> Precio:
        </div>
    </div>

</div><br><br>
   
      <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
                        
        
    </form>
</main> 

<script>

    function capturardatos() {
        var documento = $('#documento').val();
        var ruta = "{{route('ClienteShow', 1)}}"
        $.ajax({
            url: ruta,
            method: 'GET'
        }).then(function (datos){
            var datos = JSON.parse(datos.replace(/&quot;/g, ' "" '))
            console.log(datos);
        });
     


    }

</script>

@endsection