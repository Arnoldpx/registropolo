<?php
/* ini_set('display_errors', 1);
error_reporting(E_ALL); */

// Step 1: Establish a database connection using PDO
require '../../includes/config/database.php';
$db = conectarDB();

// Step 2: Retrieve the user inputs from the form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $privilegios = $_POST['privilegios'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

   /*  var_dump($privilegios, $email, $password);
    var_dump($_POST); */

    // Step 3: Sanitize and validate the user inputs
    if (empty($email) || empty($password) || empty($_POST['repeat_password'])) {
      echo "Por favor complete todos los campos.";
  } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "El formato del email no es válido.";
      } else {
          $repeatPassword = $_POST['repeat_password'];
          
          // Verificar que las contraseñas coincidan
          if ($password !== $repeatPassword) {
              echo "Las contraseñas no coinciden.";
          } else {
              // Hash the password
              $password = password_hash($password, PASSWORD_DEFAULT);
  
              try {
                  // Execute a SQL INSERT statement
                  $stmt = $db->prepare("INSERT INTO registro.usuario (nivel_privilegio, email, password) VALUES (:privilegios, :email, :password)");
                  $stmt->bindParam(':privilegios', $privilegios);
                  $stmt->bindParam(':email', $email);
                  $stmt->bindParam(':password', $password);
                  $stmt->execute();
  
                  echo "Su usuario se creó correctamente!";
              } catch (PDOException $e) {
                  echo "Error: " . $e->getMessage();
              }
          }
      }
  }
}
?>


<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/registro/dashboard/assets/img/PoloTecLogo.png">
  <title>
    Polotecnologíco
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/material-kit-pro.css?v=3.0.3" rel="stylesheet" />
</head>

<body class="sign-up-cover bg-gray-200">
<div class="page-header align-items-start min-height-300 m-3 border-radius-xl bg-gray-200" style="background-image: url(../../assets/img/banner2.jpg); background-size: cover; background-position:center;" loading="lazy">
    <span class="mask bg-gradient-dark opacity-4"></span>
</div>
  <div class="container">
    <div class="row mt-lg-n12 mt-md-n12 mt-n11 justify-content-center">
      <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
        <div class="card mt-8">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1 text-center py-4">
              <h4 class="font-weight-bolder text-white mt-1">Registro de Polotecnologíco</h4>
              <p class="mb-1 text-white text-sm">Complete los campos con sus datos.</p>
            </div>
          </div>
          <div class="card-body pb-3">
              <form role="form"  method="POST" action="/registro/pages/sign-up/registro.php">
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="">
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" value="">
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Repetir Contraseña</label>
                <input type="password" name="repeat_password" class="form-control" value="">
              </div>
             <!-- <div class="input-group input-group-outline mb-3">
                <label class="form-label">Repetir Contraseña</label>
                <input type="name" name="nombre" class="form-control" value="<?php echo $nombre; ?>">
              </div> -->

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="privilegios" id="nivel-usuario" value="usuario" require>
                <label class="form-check-label" for="nivel-usuario"> Acepta los,<a class="text-dark font-weight-bolder"> Terminos y condiciones.</a></label>
              </div>
            <!--   <div class="form-check">
                <input class="form-check-input" type="radio" name="privilegios" id="nivel-empresa" value="empresa">
                <label class="form-check-label" for="nivel-empresa">Empresa</label>
              </div> -->


             <!-- <div class="form-check text-left">
                <input class="form-check-input bg-dark border-dark" type="checkbox" value="" id="flexCheckDefault" checked>
                <label class="form-check-label" for="flexCheckDefault">
                  Acepta los,<a class="text-dark font-weight-bolder"> Terminos y condiciones.</a>
                </label>
              </div> -->

              <div class="text-center">
                <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">Registrarme</button>
              </div>
            </form>
          </div>
          <div class="card-footer text-center pt-0 px-sm-4 px-1">
            <p class="mb-4 mx-auto">
              Usted esta registrado ?
              <a href="../../index.php" class="text-primary text-gradient font-weight-bold">Iniciar Sesion</a>
            </p>
            <!-- <p class="mb-4 mx-auto">
              Buscamos nuevos talentos, Somos una Empresa.
              <a href="/registro/dashboard/pages/applications/wizard.php" class="text-primary text-gradient font-weight-bold">¡Registrarme como empresa!</a>
            </p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/mattboldt/typed.js/ -->
  <script src="../../assets/js/plugins/typedjs.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../../assets/js/plugins/parallax.min.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the blob animation -->
  <script src="../../assets/js/plugins/anime.min.js" type="text/javascript"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../../assets/js/material-kit-pro.min.js?v=3.0.3" type="text/javascript"></script>
</body>

</html>