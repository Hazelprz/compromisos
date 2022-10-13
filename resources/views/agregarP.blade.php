<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-image: url(https://img.freepik.com/vector-gratis/vector-fondo-diseno-textura-acuarela-rosa-suave-decorativo_1055-10739.jpg?w=2000)">

    <center>
    <h1 style="color:#270624; font-weight:bold; font-size: 48pt">AGREGAR PERSONA</h1>

    <form action="{{route('personas.guardar')}}" method="POST">
      @csrf
     <center>
      <div class="form-row" style="margin-left: 550px">
        <div class="form-group form-group col-md-2">
          <label for="id" style="color:#270624; font-weight:bold; font-size: 18pt">ID</label>
          <input type="number" class="form-control" id="id" placeholder="ID" name="id" value="{{old('id')}}">
        </div>
        @error('id')
        <small>*{{$message}}</small>
    @enderror
      </div>

      <div class="form-row" style="margin-left: 550px">
        <div class="form-group form-group col-md-2">
          <label for="nombre"style="color:#270624; font-weight:bold; font-size: 18pt">Nombre</label>
          <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="{{old('nombre')}}">
        </div>
        @error('nombre')
        <small>*{{$message}}</small>
    @enderror

        <div class="form-group form-group col-md-2">
          <label for="sexo"style="color:#270624; font-weight:bold; font-size: 18pt">Sexo</label>
          <select class="form-control" id="sexo" name="sexo" >
            <option>Masculino</option>
            <option>Femenino</option>
          </select>
        </div>
      </div>

      <div class="form-row" style="margin-left: 550px">
        <div class="form-group form-group col-md-2">
          <label for="edad"style="color:#270624; font-weight:bold; font-size: 18pt">Edad</label>
            <input type="number" class="form-control" id="edad" placeholder="Edad" name="edad" value="{{old('edad')}}">
        </div>
        @error('edad')
        <small>*{{$message}}</small>
    @enderror
        <div class="form-group form-group col-md-2">
          <label for="estadoCivil"style="color:#270624; font-weight:bold; font-size: 16pt">Estado civil</label>
          <select class="form-control" id="estadoCivil" name="estadoCivil" disabled>
            <option>Soltero(a)</option>
            <option>Casado(a)</option>
          </select>
        </div>
      </div>
     </center>

      <button class="nav-link active btn btn-primary" type="submit">Guardar</button>
      
    </form>
    
    <a href="{{route('personas.listar')}}">Volver</a>
   
   
</center>
</body>
</html>