<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-image: url(https://fondosmil.com/fondo/36853.jpg)">
    <center>
        <h1 style="color:#270624; font-weight:bold; font-size: 48pt">MODIFICAR PERSONA</h1><br>
        <form action="{{route('personas.modificar', $persona)}}" method="POST">
          @csrf
          @method('put')

          <div class="form-row" style="margin-left: 550px">
            <div class="form-group form-group col-md-2">
              <label for="id" style="color:#270624; font-weight:bold; font-size: 18pt">ID</label>
              <input type="number" class="form-control" id="id" placeholder="ID" name="id" value="{{old('id', $persona->id)}}" >
            </div>
            @error('id')
            <small>*{{$message}}</small>
        @enderror
          </div>
    
          <div class="form-row" style="margin-left: 550px">
            <div class="form-group form-group col-md-2">
              <label for="nombre"style="color:#270624; font-weight:bold; font-size: 18pt">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="{{old('nombre', $persona->nombre)}}">
            </div>
            @error('nombre')
            <small>*{{$message}}</small>
        @enderror
    
            <div class="form-group form-group col-md-2">
              <label for="sexo"style="color:#270624; font-weight:bold; font-size: 18pt">Sexo</label>
              <select class="form-control" id="sexo" name="sexo" disabled>
                <option selected>{{$persona->sexo}}</option>
                <option>Masculino</option>
                <option>Femenino</option>
              </select>
            </div>
          </div>
    
          <div class="form-row" style="margin-left: 550px">
            <div class="form-group form-group col-md-2">
              <label for="edad"style="color:#270624; font-weight:bold; font-size: 18pt">Edad</label>
                <input type="number" class="form-control" id="edad" placeholder="Edad" name="edad" value="{{old('edad', $persona->edad)}}">
            </div>
            @error('edad')
            <small>*{{$message}}</small>
        @enderror
            <div class="form-group form-group col-md-2">
              <label for="estadoCivil"style="color:#270624; font-weight:bold; font-size: 16pt">Estado civil</label>
              <select class="form-control" id="estadoCivil" name="estadoCivil" disabled>
                <option selected>{{$persona->estadoCivil}}</option>
                {{-- <option>Soltero(a)</option>
                <option>Casado(a)</option> --}}
              </select>
            </div>
          </div>
    
         <button class="nav-link active btn btn-primary" type="submit">Guardar</button>
          
        </form>

    
    <a href="{{route('personas.listar')}}">Volver</a>
</center>
</body>
</html>