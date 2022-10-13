<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Registro civil</title>
</head>
<body style="background-image: url(https://img.freepik.com/premium-vector/red-hearts-background-paper-cut-hearts_97458-419.jpg?w=2000)">
    <center><h1 style="color:#f50e48; font-weight:bold; font-size: 48pt">Registro civil</h1><br>

      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active btn btn-primary" href="{{route('personas.agregar')}}" type="button">Agregar persona</a>
        </li>

        <li class="nav-item"style="margin-left: 100px">
          <a class="nav-link active btn btn-success" href="{{route('comprometidos.index')}}" type="button">Ver matrimonios</a>
        </li>

        <li class="nav-item" style="margin-left: 100px">
          <a class="nav-link active btn btn-warning" href="{{route('personas.comprometer')}}" type="button">Registrar un matrimonio</a>
        </li>

        <li class="nav-item" style="margin-left: 100px">
          <a class="nav-link active btn btn-danger" href="{{route('contactanos.contactanos')}}" type="button">Contacto</a>
        </li>
        
      </ul>
      <br>

    <table class="table table-dark" border="1" style="text-align: center">
        <thead>
          <tr>
            <th >ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th style="width: 150px">Estado civil</th>
            <th style="width: 200px">Número de matrimonios</th>
            <th style="width: 300px">Acciones</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($personas as $persona)
        <tr>
            <td>{{$persona->id}}</td>
            <td>{{$persona->nombre}}</td>
            <td>{{$persona->edad}}</td>
            <?php
            if ($persona->sexo=="Masculino") {
              echo "<td style='background-color: rgb(74, 128, 243)'>$persona->sexo</td>";
            }else{
              echo "<td style='background-color: rgb(235, 111, 240)'>$persona->sexo</td>";
            }
            if ($persona->estadoCivil=="Soltero(a)") {
              echo "<td style='color:green'>$persona->estadoCivil</td>";
            }else{
              echo "<td style='color:rgb(192, 0, 10)'>$persona->estadoCivil</td>";
            }
            ?>
            <td>{{$persona->numMatrimonios}}</td>
            <td>
                 <a href="{{route('personas.editar', $persona)}}">✏️Editar</a>
               <a href="{{route('personas.eliminar', $persona)}}" style="margin-left: 50px">🗑️Borrar</a>  
              
            </td>
          </tr>
        @endforeach
        <tbody>
        </table>
        <a href="{{route('iniciar.sesion')}}">Cerrar sesión</a>
    </center>
   
</body>
</html>