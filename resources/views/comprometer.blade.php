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
    <h1 style="color:#270624; font-weight:bold; font-size: 48pt">REGISTRAR MATRIMONIO</h1><br>

    <form action="{{route('comprometidos.casar')}}" method="POST">
      @csrf
     <center>
      <div class="form-row" style="margin-left: 420px">
        <div class="form-group form-group col-md-3">
          <label for="id1" style="color:#270624; font-weight:bold; font-size: 18pt">ID persona 1</label>
          <input type="number" class="form-control" id="id1" placeholder="ID" name="id1" value="{{old('id1')}}">
        </div>
        @error('id1')
        <small>*{{$message}}</small>
    @enderror

    <div class="form-group form-group col-md-3" style="margin-left: 50px">
      <label for="id2" style="color:#270624; font-weight:bold; font-size: 18pt">ID persona 2</label>
      <input type="number" class="form-control" id="id2" placeholder="ID" name="id2" value="{{old('id2')}}">
    </div>
    @error('id2')
    <small>*{{$message}}</small>
@enderror
      </div><br>
      <button class="nav-link active btn btn-primary" type="submit">❤️Registrar</button>
      
    </form>
    <br>
    <a href="{{route('personas.listar')}}">Volver</a>
   
   
</center>
</body>
</html>