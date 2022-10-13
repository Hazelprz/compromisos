<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Detalles</title>
</head>
<body style="background-image: url(https://img.freepik.com/vector-gratis/vector-fondo-diseno-textura-acuarela-rosa-suave-decorativo_1055-10739.jpg?w=2000)">
    <center>
    <h1 style="color:#270624; font-weight:bold; font-size: 44pt">DETALLES DEL MATRIMONIO</h1><br>

<div class="form-row">
    <div class="form-group form-group col-md-5" style="margin-left: 100px">
        <p style="color:#270624; font-weight:bold; font-size: 24pt"><strong>Hombre</strong></p>
        <p style="color:#270624; font-weight:bold; font-size: 18pt">ID: {{$persona1->id}}</p>
        <p style="color:#270624; font-weight:bold; font-size: 18pt">Nombre: {{$persona1->nombre}}</p>
        <p style="color:#270624; font-weight:bold; font-size: 18pt">Edad: {{$persona1->edad}}</p>
        <p style="color:#270624; font-weight:bold; font-size: 18pt">Sexo: {{$persona1->sexo}}</p>
        <p style="color:#270624; font-weight:bold; font-size: 18pt">Estado civil: {{$persona1->estadoCivil}}</p>
        <p style="color:#270624; font-weight:bold; font-size: 18pt">Veces que estuvo casado(a): {{$persona1->numMatrimonios}}</p><br> 
    </div>


    <div class="form-group form-group col-md-5">
        <p style="color:#270624; font-weight:bold; font-size: 24pt"><strong>Mujer</strong></p>
        <p style="color:#270624; font-weight:bold; font-size: 18pt">ID: {{$persona2->id}}</p>
        <p style="color:#270624; font-weight:bold; font-size: 18pt">Nombre: {{$persona2->nombre}}</p>
        <p style="color:#270624; font-weight:bold; font-size: 18pt">Edad: {{$persona2->edad}}</p>
        <p style="color:#270624; font-weight:bold; font-size: 18pt">Sexo: {{$persona2->sexo}}</p>
        <p style="color:#270624; font-weight:bold; font-size: 18pt">Estado civil: {{$persona2->estadoCivil}}</p>
        <p style="color:#270624; font-weight:bold; font-size: 18pt">Veces que estuvo casado(a): {{$persona2->numMatrimonios}}</p><br> 

    </div>
  </div>
    <a href="{{route('comprometidos.index')}}">Volver</a>
</center>


</body>
</html>