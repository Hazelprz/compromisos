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
    <br><br><br><br><br>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-3">
        <img src="https://cdn-icons-png.flaticon.com/512/5087/5087579.png"
          class="img-fluid" alt="Sample image" style="width: 350px;">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="{{route('login.validar')}}" method="POST">
            @csrf
          <center><h1 style="color:#f50e48; font-weight:bold; font-size: 24pt">Registro civil</h1></center><br>
          <div class="form-outline mb-4">
            <input type="text" id="user" name="user" class="form-control form-control-lg"
              placeholder="Ingresa nombre de usuario" />
            <label class="form-label" for="user">Usuario</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="pswd" name="pswd" class="form-control form-control-lg"
              placeholder="Ingresa contraseña" />
            <label class="form-label" for="pswd">Contraseña</label>
          </div>


          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>

          </div>

        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>