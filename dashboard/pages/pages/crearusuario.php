<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

// Paso 1: Establecer una conexión con la base de datos
require '../../includes/config/database.php';
$db = conectarDB();

$email = '';
$password = '';
$confirm_password = '';

// Paso 2: Obtener los datos ingresados por el usuario desde el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nivel_privilegio = $_POST['privilegios'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Paso 3: Sanitizar y validar los datos ingresados por el usuario
    $nivel_privilegio = filter_var($nivel_privilegio, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    if (!$nivel_privilegio || !$email || empty($password) || empty($confirm_password)) {
        die("Por favor complete todos los campos correctamente.");
    }

    // Paso 4: Verificar que las contraseñas coincidan
    if ($password !== $confirm_password) {
        die("Las contraseñas no coinciden.");
    }

    // Paso 5: Encriptar la contraseña
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Paso 6: Ejecutar una sentencia SQL INSERT para insertar los datos del usuario en la base de datos
    $query = "INSERT INTO registro.usuario (nivel_privilegio, email, password) VALUES (:nivel_privilegio, :email, :password)";
    $statement = $db->prepare($query);
    $statement->bindParam(':nivel_privilegio', $nivel_privilegio);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':password', $password);

    if ($statement->execute()) {
        echo "¡Su usuario se creó correctamente!";
    } else {
        echo "Error en la ejecución de la consulta: " . $statement->errorInfo()[2];
    }
}

?>


<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/registro/assets/img/PoloTecLogo.png">
  <title>
    Polotecnologíco
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../../../assets/css/material-kit-pro.css?v=3.0.3" rel="stylesheet" />
</head>

<body class="sign-up-cover bg-gray-200">
<div class="page-header align-items-start min-height-300 m-3 border-radius-xl bg-gray-200" style="background-image: url(../../../assets/img/banner2.jpg); background-size: cover; background-position:center;" loading="lazy">
    <span class="mask bg-gradient-dark opacity-4"></span>
</div>
  <div class="container">
    <div class="row mt-lg-n12 mt-md-n12 mt-n11 justify-content-center">
      <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
        <div class="card mt-8">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1 text-center py-4">
              <h4 class="font-weight-bolder text-white mt-1">Generando un nuevo usuario</h4>
              <p class="mb-1 text-white text-sm">Complete con los datos del usuario.</p>
            </div>
          </div>
          <div class="card-body pb-3">
          <form role="form" method="POST" action="/registro/dashboard/pages/pages/crearusuario.php">
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
  </div>
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Contraseña</label>
    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
  </div>
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Repetir Contraseña</label>
    <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
  </div>

  <div class="form-check mb-3">
    <input class="form-check-input" type="radio" name="privilegios" value="<?php echo "usuario"; ?>" id="privilegio-usuario">
    <label class="form-check-label" for="privilegio-usuario">Usuario</label>
  </div>
  <div class="form-check mb-3">
    <input class="form-check-input" type="radio" name="privilegios" value="<?php echo "empresa"; ?>" id="privilegio-empresa">
    <label class="form-check-label" for="privilegio-empresa">Empresa</label>
  </div>
  <div class="form-check mb-3">
    <input class="form-check-input" type="radio" name="privilegios" value="<?php echo "admin"; ?>" id="privilegio-admin">
    <label class="form-check-label" for="privilegio-admin">Admin</label>
  </div>

  <div class="form-check text-left">
    <input class="form-check-input bg-dark border-dark" type="checkbox" value="" id="flexCheckDefault" checked>
    <label class="form-check-label" for="flexCheckDefault">
      Acepta los, <a class="text-dark font-weight-bolder">Términos y condiciones.</a>
    </label>
  </div>

  <div class="text-center">
    <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">Crear Nuevo Usuario</button>
  </div>
  <div class="text-center">
      <a href="dashboard\index.php" class="btn bg-gradient-primary w-100 mt-4 mb-0">Volver al Atras.</a>
   </div>
</form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="../../../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/mattboldt/typed.js/ -->
  <script src="../../../assets/js/plugins/typedjs.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../../../assets/js/plugins/parallax.min.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../../../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the blob animation -->
  <script src="../../../assets/js/plugins/anime.min.js" type="text/javascript"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../../../assets/js/material-kit-pro.min.js?v=3.0.3" type="text/javascript"></script>
</body>

</html>