<!-- errors & messages --->
<?php

// show negative messages
if ($login->errors) {
    foreach ($login->errors as $error) {
        echo $error;    
    }
}

// show positive messages
if ($login->messages) {
    foreach ($login->messages as $message) {
        echo $message;
    }
}

?>
<!-- errors & messages --->

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

</head>
  <body>
    <div class="container">
    <h1>Tutoriais do moodle</h1>
    </div>
   
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="img/logo upra.png" style="width: 185px;" alt="logo">
                  <h5 class="mt-1 mb-5 pb-1">Faça login para assistir tutoriais do moodle</h5>
                </div>

                <form method="post" action="index.php" name="loginform">
                  <p>Primeiro e o ultimo nome do docente</p>

                  <div class="form-outline mb-4">
                    <input class="form-control"  placeholder="Primeiro e o ultimo nome docente"  id="login_input_username" type="text" name="user_name" required/>
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" class="form-control" id="login_input_password"  name="user_password" autocomplete="off" required />
                    <label class="form-label" for="form2Example22" placeholder="Nº de identificação" >Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="login">Entrar</button>
                    <a class="text-muted" href="register.php">Esqueceu seu email</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Não tem um email institucional?</p>
                    <button type="button" class="btn btn-outline-danger">Pedir um novo</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Tutoriais do moodle</h4>
                <p class="small mb-0">Apenas para docentes da Universidade privada de Angola</p>
                <p class="small mb-0">User: Primeiro e ultimo nome do docente</p>
                <p class="small mb-0">Pass:Nº Identificação do docente</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>