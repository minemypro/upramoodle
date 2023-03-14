<!-- errors & messages --->
<?php

// show negative messages
if ($registration->errors) {
  foreach ($registration->errors as $error) {
    echo $error;
  }
}

// show positive messages
if ($registration->messages) {
  foreach ($registration->messages as $message) {
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="fab container">
  <h1 class="mt-5">Cadastrar Docente</h1>
  </div>


  

  <!-- Section: Design Block -->
  <section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -30px;
      }

      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>

    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Inscrever docente</h2>

              <form method="post" action="register.php" name="registerform">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">

                      <input id="login_input_username" class="form-control login_input" type="text"
                        pattern="[a-zA-Z0-9]{2,64}" name="user_name" required
                        placeholder="Primeiro e ultimo nome juntos" />
                      <label class="form-label" for="form3Example1">(Primeiro e Ultimo no do docente juntos)</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="email" id="login_input_email" class="form-control login_input" name="user_email"
                        required />
                      <label class="form-label" for="form3Example2">User's email</label>

                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input id="login_input_password_new" class="form-control login_input" type="password"
                    name="user_password_new" pattern=".{6,}" required autocomplete="off" />
                  <label class="form-label" for="form3Example4">Password (min. 6 caracter)</label>
                </div>


                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input id="login_input_password_repeat" class="form-control login_input" type="password"
                    name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />

                  <label class="form-label" for="form3Example4">Repetir a senha</label>
                </div>



                
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-success btn-block mb-4" name="register" value="Registar">
                    Registrar Docente
                  </button> <br>

                  <a href="index.php" >Voltar para fazer login</a>
               


                <!-- Register buttons -->
                <div class="text-center">
                  <p>manuel:</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="img/profess.jpg" class="w-100 rounded-4 shadow-4"
            alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->











  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>