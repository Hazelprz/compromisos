<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-image: url(https://img.freepik.com/vector-gratis/vector-fondo-diseno-textura-acuarela-rosa-suave-decorativo_1055-10739.jpg?w=2000)">
    
        <center>
            <h1 style="color: #270624;font-weight:bold; font-size: 48pt">ENVAR CORREO</h1><br>
            <br>
            <form action="{{route('contactanos.enviar')}}" method="POST">
                @csrf
               <center>
                <div class="form-row" style="margin-left: 360px">
                  <div class="form-group form-group col-md-4">
                    <label for="nombre"style="color:#270624; font-weight:bold; font-size: 12pt">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="{{old('nombre')}}">
                  </div>
                  @error('nombre')
                  <small>*{{$message}}</small>
              @enderror
          
              <div class="form-group form-group col-md-4">
                <label for="correo"style="color:#270624; font-weight:bold; font-size: 12pt">Correo electrónico</label>
                <input type="email" class="form-control" id="correo" placeholder="Correo" name="correo" value="{{old('correo')}}">
              </div>
              @error('correo')
              <small>*{{$message}}</small>
          @enderror
                </div>

                <div class="form-row" style="margin-left: 360px">
                    <div class="form-group form-group col-md-8">
                      <label for="mje" style="color:#270624; font-weight:bold; font-size: 12pt">Mensaje</label><br>
                      <textarea name="mje" id="mje" cols="30" rows="5">{{old('correo')}}</textarea>
                    </div>
                    @error('mje')
                    <small>*{{$message}}</small>
                @enderror
                  </div>
        </center>
        <button class="nav-link active btn btn-primary" type="submit">Enviar</button>
    </form>
    <a href="{{route('personas.listar')}}">Volver</a>
</body>
</html>