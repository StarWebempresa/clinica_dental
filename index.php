
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CLinica Dental Dra Arce</title>
  <link rel="stylesheet" href="./css/style1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


</head>
<body id="body" class="d-flex justify-content-center align-items-center vh-100">
  <div id="container" class="container w-75" style="border-radius: 20px;">
    <div id="datos" class="row">
      <div class="col px-0 bg d-flex">
        <img  class="img-fluid" src="images/inicio.png" alt="logoPrin">
      </div>
      <div  class="col-sm px-5 ">
        <div class="text-end ">
          <img class="rounded-circle m-2" src="images/inicio.png" alt="logo" width="48">
        </div>
        <h1 class="fw-bold text-center pt-2 mb-4">
          Bienvenido
        </h1>
        <form action="validar_login.php" method="post">
          <div class="mb-4">
            <label for="Usuario" class="form-label fs-4"> Usuario</label>
            <input type="text" class="form-control" name="usuario" placeholder="Usuario">
          </div>
          <div class="mb-4">
            <label for="password" class="form-label fs-4"> Password</label>
            <input type="password" class="form-control" name="password" placeholder="contraseña">
          </div> 
          <div class="mb-4 form-check">
            <input type="checkbox" name="connected" class="form-check-input" id="">
            <label for="connected" class="form-check-label">Mantenerme Conectado</label>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary" name="btn_iniciar">Iniciar Sesión</button>
          </div>
          <!--div class="my-3 text-center">
            <span>No tienes cuenta? <a href="#">Registrate</a></span>
            < div class="mt-sm-3 mb-sm-4 ">
              <span ><a href="#" class="text-decoration-none">Recuperar Contraseña</a></span>
            </div-->
            
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>