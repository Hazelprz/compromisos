<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Matrimonios</title>
</head>
<body style="background-image: url(https://img.freepik.com/premium-vector/red-hearts-background-paper-cut-hearts_97458-419.jpg?w=2000)">
    <center><h1 style="color:#f50e48; font-weight:bold; font-size: 48pt">MATRIMONIOS</h1><br>
    
   
   
    <table class="table table-dark" border="1" style="text-align: center"
    style="margin-left: 50px; margin-right: 50px">
        <thead>
          <tr>
            <th>ID del matrimonio</th>
            <th style="width: 300px">Hombre</th>
            {{-- <th>ID de la mujer</th> --}}
            <th style="width: 300px">Mujer</th>
            <th style="width: 500px">Acciones</th>

          </tr>
        </thead>
        <tbody>
        @foreach ($comprometidos as $compromiso)
        <tr>
          <td>{{$compromiso->id}}</td>
            {{-- <td>{{$compromiso->idH}}</td> --}}
            <td>{{$compromiso->nombreH}}</td>
            {{-- <td>{{$compromiso->idM}}</td> --}}
            <td>{{$compromiso->nombreM}}</td>
            <td>
              <a href="{{route('comprometidos.detalles', $compromiso->id)}}">✨Detalles</a> 
               <a href="{{route('comprometidos.anular', $compromiso->id)}}"style="margin-left: 50px">💔Anular matrimonio</a>  
              
            </td>
          </tr>
        @endforeach
        <tbody>
        </table>
        <a href="{{route('personas.listar')}}">Volver</a>
      </center>

   
</body>
</html>