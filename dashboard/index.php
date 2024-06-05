<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
    // Verificar que el usuario este logeado
     require "../includes/funciones.php";
     $auth = estaAutenticado();
     if (!$auth) {
       header('Location: ../index.php');
    }
  //   Verificar si el usuario tiene privilegios de administrador
  
  if ($_SESSION['nivel_privilegio'] === 'admin') {
//  //  El usuario tiene acceso de administrador
//   // ...
} else {
//   // El usuario no tiene suficientes privilegios
//   // Redirigir a una página de error o mostrar un mensaje de error
  header('Location: ../index.php');
} 
    
   // Verificar el nivel de acceso del usuario
   if ($_SESSION['nivel'] != 'empresa') {
   // El usuario no tiene permiso para acceder a esta página, mostrar un error o redirigir a otra página
    die('Acceso denegado');
  }
var_dump($_POST);

// Step 1: Establish a database connection using PDO
require '../includes/config/database.php';
$db = conectarDB();

// Step 2: Retrieve the user inputs from the form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $localidad = $_POST["localidad"];
    $estudios = $_POST["estudios"];
    $especializacion  = $_POST["especializacion"];
    $genero = $_POST["genero"];
    $titulo = $_POST["titulo"];
    $curso_polo = $_POST["curso_polo"];
    $fecha_de_nacimiento = $_POST["fecha_de_nacimiento"];
    $telefono = $_POST["telefono"];
    $residencia = $_POST["residencia"];
    $recide_en_exterior = $_POST["recide_en_exterior"];
    $java = $_POST["java"];
    $net = $_POST["net"];
    $c = $_POST["c"];
    $c_tag = $_POST["c_tag"];
    $javascript = $_POST["javascript"];
    $python = $_POST["python"];
    $visualbasic = $_POST["visualbasic"];
    $html_css = $_POST["html_css"];
    $php = $_POST["php"];
    $extra_programacion = $_POST["extra_programacion"];
    $sql_server = $_POST["sql_server"];
    $mysql = $_POST["mysql"];
    $postgre = $_POST["postgre"];
    $oracle = $_POST["oracle"];
    $extra_db = $_POST["extra_db"];
    $linux = $_POST["linux"];
    $windows_server = $_POST["windows_server"];
    $ios = $_POST["ios"];
    $android = $_POST["android"];
    $extra_sistemas_operativos = $_POST["extra_sistemas_operativos"];
    $sistemas_geo = $_POST["sistemas_geo"];
    $github = $_POST["github"];
    $computacion_nube = $_POST["computacion_nube"];
    $metodologias_agiles = $_POST["metodologias_agiles"];
    $pmi = $_POST["pmi"];
    $ciencia_de_datos = $_POST["ciencia_de_datos"];
    $data_wh = $_POST["data_wh"];
    $extra_it = $_POST["extra_it"];
    $experiencia_dev = $_POST["experiencia_dev"];
    $experiencia_it = $_POST["experiencia_it"];
    $debilidades = $_POST["debilidades"];
    $extra_sistemas = $_POST["extra_sistemas"];
    $ingles = $_POST["ingles"];
    $extra_idiomas = $_POST["extra_idiomas"];
    $trabajo_actual = $_POST["trabajo_actual"];
    $disponibilidad = $_POST["disponibilidad"];
    $remuneracion_actual = $_POST["remuneracion_actual"];
    $remuneracion_pretendida = $_POST["remuneracion_pretendida"];

    // Step 3: Sanitize and validate the user inputs
    $campos_vacios = array_filter($_POST, function ($value) {
      return empty($value);
  });

  if (!empty($campos_vacios)) {
      echo "Por favor complete todos los campos.";
  } else {
    $campos = array(
      ':nombre' => $_POST["nombre"],
      ':apellido' => $_POST["apellido"],
      ':localidad' => $_POST["localidad"],
      ':estudios' => $_POST["estudios"],
      ':especializacion' => $_POST["especializacion"],
      ':genero' => $_POST["genero"],
      ':titulo' => $_POST["titulo"],
      ':curso_polo' => $_POST["curso_polo"],
      ':fecha_de_nacimiento' => $_POST["fecha_de_nacimiento"],
      ':telefono' => $_POST["telefono"],
      ':residencia' => $_POST["residencia"],
      ':recide_en_exterior' => $_POST["recide_en_exterior"],
      ':java' => $_POST["java"],
      ':net' => $_POST["net"],
      ':c' => $_POST["c"],
      ':c_tag' => $_POST["c_tag"],
      ':javascript' => $_POST["javascript"],
      ':python' => $_POST["python"],
      ':visualbasic' => $_POST["visualbasic"],
      ':html_css' => $_POST["html_css"],
      ':php' => $_POST["php"],
      ':extra_programacion' => $_POST["extra_programacion"],
      ':sql_server' => $_POST["sql_server"],
      ':mysql' => $_POST["mysql"],
      ':postgre' => $_POST["postgre"],
      ':oracle' => $_POST["oracle"],
      ':extra_db' => $_POST["extra_db"],
      ':linux' => $_POST["linux"],
      ':windows_server' => $_POST["windows_server"],
      ':ios' => $_POST["ios"],
      ':android' => $_POST["android"],
      ':extra_sistemas_operativos' => $_POST["extra_sistemas_operativos"],
      ':sistemas_geo' => $_POST["sistemas_geo"],
      ':github' => $_POST["github"],
      ':computacion_nube' => $_POST["computacion_nube"],
      ':metodologias_agiles' => $_POST["metodologias_agiles"],
      ':pmi' => $_POST["pmi"],
      ':ciencia_de_datos' => $_POST["ciencia_de_datos"],
      ':data_wh' => $_POST["data_wh"],
      ':extra_it' => $_POST["extra_it"],
      ':experiencia_dev' => $_POST["experiencia_dev"],
      ':experiencia_it' => $_POST["experiencia_it"],
      ':debilidades' => $_POST["debilidades"],
      ':extra_sistemas' => $_POST["extra_sistemas"],
      ':ingles' => $_POST["ingles"],
      ':extra_idiomas' => $_POST["extra_idiomas"],
      ':trabajo_actual' => $_POST["trabajo_actual"],
      ':disponibilidad' => $_POST["disponibilidad"],
      ':remuneracion_actual' => $_POST["remuneracion_actual"],
      ':remuneracion_pretendida' => $_POST["remuneracion_pretendida"]
  );
       // Step 4: Prepare and execute the SQL INSERT statement using PDO prepared statements
       $sql = "INSERT INTO registro.form_personas (nombre, apellido, localidad, estudios, especializacion, genero, titulo, curso_polo, fecha_de_nacimiento, telefono, residencia, recide_en_exterior, java, net, c, c_tag, javascript, python, visualbasic, html_css, php, extra_programacion, sql_server, mysql, postgre, oracle, extra_db, linux, windows_server, ios, android, extra_sistemas_operativos, sistemas_geo, github, computacion_nube, metodologias_agiles, pmi, ciencia_de_datos, data_wh, extra_it, experiencia_dev, experiencia_it, debilidades, extra_sistemas, ingles, extra_idiomas, trabajo_actual, disponibilidad, remuneracion_actual, remuneracion_pretendida, cv)
       VALUES (:nombre, :apellido, :localidad, :estudios, :especializacion, :genero, :titulo, :curso_polo, :fecha_de_nacimiento, :telefono, :residencia, :recide_en_exterior, :java, :net, :c, :c_tag, :javascript, :python, :visualbasic, :html_css, :php, :extra_programacion, :sql_server, :mysql, :postgre, :oracle, :extra_db, :linux, :windows_server, :ios, :android, :extra_sistemas_operativos, :sistemas_geo, :github, :computacion_nube, :metodologias_agiles, :pmi, :ciencia_de_datos, :data_wh, :extra_it, :experiencia_dev, :experiencia_it, :debilidades, :extra_sistemas, :ingles, :extra_idiomas, :trabajo_actual, :disponibilidad, :remuneracion_actual, :remuneracion_pretendida, '')";

       try {
           $stmt = $db->prepare($sql);
           $stmt->execute($campos);
           echo "Su usuario se creó correctamente!";
       } catch (PDOException $e) {
           echo "Error: " . $e->getMessage();
       }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/PoloTecLogo.png">

<title>Registro Economia del Conocimiento</title>
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<!-- CSS Files -->
<link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.6" rel="stylesheet" />
</head>
<body class="g-sidenav-show  bg-gray-100">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="/registro/index.php" target="_blank">
      <img src="/registro/dashboard/assets/img/PoloTecLogo.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">Registro Economia del Conocimiento</span>
    </a>
  </div>


  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      
        <!-- nav perfil intro -->
        <li class="nav-item mb-2 mt-0">
          <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
            <img src="/registro/dashboard/assets/img/PoloTecLogo.png" class="avatar">
            <span class="nav-link-text ms-2 ps-1">POLO TECNOLOGICO</span>
          </a>
          <!-- Nav perfil-->
          <div class="collapse" id="ProfileNav">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link text-white " data-scroll="#profile" href="/registro/dashboard/index.php">
                  <i class="material-icons text-lg me-2">person</i>
                  <span class="text-sm">Perfil</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " data-scroll="" href="#basic-info">
                  <i class="material-icons text-lg me-2">receipt_long</i>
                  <span class="text-sm">Informacion Basica</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " data-scroll="" href="#password">
                  <i class="material-icons text-lg me-2">lock</i>
                  <span class="text-sm">Cambiar contraseña</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " data-scroll="" href="#notifications">
                  <i class="material-icons text-lg me-2">campaign</i>
                  <span class="text-sm">Notificaciones</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " data-scroll="" href="#sessions">
                  <i class="material-icons text-lg me-2">settings_applications</i>
                  <span class="text-sm">Sessiones activas</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white " data-scroll="" href="#delete">
                  <i class="material-icons text-lg me-2">delete</i>
                  <span class="text-sm">Borrar Cuenta</span>
                </a>
              </li>
            </ul>
          
          </div>
        </li>
        <!-- Nav perfil fin-->
        <hr class="horizontal light mt-0">

        <li class="nav-item">
  

          <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link text-white " aria-controls="dashboardsExamples" role="button" aria-expanded="false">
            
              <i class="material-icons-round opacity-10">receipt_long</i>
            
            <span class="nav-link-text ms-2 ps-1">Registro</span>
          </a>
  
  <div class="collapse " id="dashboardsExamples">
    <ul class="nav ">
    
    <?php
    if (isset($_SESSION['nivel_privilegio']) && ($_SESSION['nivel_privilegio'] == 'admin' || $_SESSION['nivel_privilegio'] == 'empresa')) {
        echo '<li class="nav-item ">
            <a class="nav-link text-white " href="\registro\dashboard\pages\applications\datatables.php">
              <span class="sidenav-mini-icon"> R </span>
              <span class="sidenav-normal  ms-2  ps-1"> Registro </span>
            </a>
          </li>';
    }

    if (isset($_SESSION['nivel_privilegio']) && $_SESSION['nivel_privilegio'] == 'admin') {
        echo '<li class="nav-item ">
            <a class="nav-link text-white " href="/registro/dashboard/pages/pages/crearusuario.php">
              <span class="sidenav-mini-icon"> R </span>
              <span class="sidenav-normal  ms-2  ps-1">Generar Usuario </span>
            </a>
          </li>';
    }
    ?>

      <li class="nav-item ">
        <a class="nav-link text-white " href="/registro/dashboard/pages/pages/projects/new-project.php">
          <span class="sidenav-mini-icon"> I </span>
          <span class="sidenav-normal  ms-2  ps-1"> Iniciar una Busqueda </span>
        </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link text-white " href="/registro/dashboard/pages/pages/projects/timeline.php">
          <span class="sidenav-mini-icon"> B </span>
          <span class="sidenav-normal  ms-2  ps-1"> Busquedas Activas </span>
        </a>
      </li>
  </ul>
</div>
</li>
</aside>

      <main class="main-content border-radius-lg ">
  <!-- Main -->

  <main class="main-content max-height-vh-100 h-100">
    
    <div class="container-fluid my-3 py-3">
      <div class="row mb-5">
          <!-- Card Profile -->
          <div class="card card-body" id="profile">
            <div class="row justify-content-center align-items-center">
              <div class="col-sm-auto col-4">
                <div class="avatar avatar-xl position-relative">
                  <img src="assets/img/PoloTecLogo.png" alt="bruce" class="w-100 rounded-circle shadow-sm">
                </div>
              </div>
              <div class="col-sm-auto col-8 my-auto">
                <div class="h-100">
                  <h5 class="mb-1 font-weight-bolder">
                    Registro de la Economia del Conocimiento La Rioja
                  </h5>
                  <p class="mb-0 font-weight-normal text-sm">
                    Gobierno de La Rioja
                  </p>
                </div>
              </div>
             
            </div>
          </div>
          <!-- Card Basic Info -->
            <form class="formulario" method="POST" action="\registro\dashboard\index.php">
             <div class="card mt-4" id="basic-info">
               <div class="card-header">
                 <h5>Informacion Basica</h5>
               </div>
               <div class="card-body pt-0">
                 <div class="row">
                   <div class="col-6">
                     <div class="input-group input-group-static">
                       <label>Nombre</label>
                       <input type="text" class="form-control" name="nombre" placeholder="Su Nombre" value="" >
                     </div>
                   </div>
                   <div class="col-6">
                     <div class="input-group input-group-static">
                       <label>Apellido</label>
                       <input type="text" class="form-control" name="apellido" placeholder="Su Apellido" value="">
                     </div>
                   </div>
                 </div>
                 <div class="row">

                   <div class="col-sm-4 col-6">
                     <label class="form-label mt-4 ms-0">Localidad</label>
                     <select class="form-control" name="localidad" value="">
                     <option value="La Rioja" selected>La Rioja</option>
                        <option value="Buenos Aires">Buenos Aires</option>
                        <option value="Catamarca">Catamarca</option>
                        <option value="Chaco">Chaco</option>
                        <option value="Chubut">Chubut</option>
                        <option value="Córdoba">Córdoba</option>
                        <option value="Corrientes">Corrientes</option>
                        <option value="Entre Rios">Entre Ríos</option>
                        <option value="Formosa">Formosa</option>
                        <option value="Jujuy">Jujuy</option>
                        <option value="La Pampa">La Pampa</option>
                        <option value="Mendoza">Mendoza</option>
                        <option value="Misiones">Misiones</option>
                        <option value="Neuquén">Neuquén</option>
                        <option value="Río Negro">Río Negro</option>
                        <option value="Salta">Salta</option>
                        <option value="San Juan">San Juan</option>
                        <option value="San Luis">San Luis</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                        <option value="Santa Fe">Santa Fe</option>
                        <option value="Santiago del Estero">Santiago del Estero</option>
                        <option value="Tierra del Fuego, Antártida e Islas del Atlántico Sur">Tierra del Fuego, Antártida e Islas del Atlántico Sur</option>
                        <option value="Tucumán">Tucumán</option>
                        <option value="Extranjero">Extranjero</option>
                     </select>
                   </div>

                   <div class="col-sm-8">
                     <div class="row">
                       <div class="col-sm-5 col-5">
                         <label class="form-label mt-4 ms-0">Educacion Formal</label>
                         <select  class="form-control" name="estudios" value="">
                          <option value="" disabled selected>Estudios alcanzados</option>
                          <option value="Secundario Completo">Secundario Completo</option>
                          <option value="Pregrado">Pregrado</option>
                          <option value="Grado">Grado</option>
                          <option value="Posgrado">PosGrado</option>
                          <option value="No tiene una educacion formal.">Ninguno de los anteriores</option>
                         </select>
                       </div>

                       <div class="col-sm-4 col-3">
                         <label class="form-label mt-4 ms-0">Area de Interes</label>
                         <select  class="form-control" name="especializacion" value="">
                         <option value="" disabled selected>Seleccione su Area de especializacion</option>
                        <option value="Soporte Tecnico">Soporte Técnico</option>
                        <option value="Desarrollador Frot-end">Desarrollador Frot-end</option>
                        <option value="Desarrollador Back-end">Desarrollador Back-end</option>
                        <option value="Desarrollador Full-Stack">Desarrollador Full-Stack</option>
                        <option value="Gestion de Bases de Datos">Gestion de Bases de Datos</option>
                        <option value="Analisis de Datos">Analisis de Datos</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Comunicacion / Prensa">Comunicacion / Prensa</option>
                        <option value="Politólogos">Politólogos</option>
                        <option value="Abogacia / Legales">Abogacia / Legales</option>
                        <option value="Contaduria">Contaduria</option>
                        <option value="Antropología">Antropología</option>
                        <option value="Administracion y Gestion Organizacional">Administracion y Gestion Organizacional</option>
                        <option value="Lengua extranjera">Lengua extranjera</option>
                        <option value="QA / Automatizacion">QA / Automatizacion</option>
                        <option value="otro">Otra Area</option>
                        </select>
                       </div>
                       
                       <div class="col-sm-3 col-4">
                         <label class="form-label mt-4">Su Genero</label>
                         <select  class="form-control" name="genero" value="">
                         <option value="" disabled selected>Genero</option>
                         <option value="Masculino">Masculino</option>
                         <option value="Femenino">Femenino</option>
                         <option value="LGTB+">LGTB+</option>
                         <option value="No especifica">Prefiero no especificar.</option>
                        </select>
                       </div>
                     </div>
                   </div>
                 </div>
              <div class="row mt-4">
                <div class="col-6">
                  <div class="input-group input-group-static">
                    <label>Ingrese el nombre de sus titulos de grado finalizados</label>
                    <input type="text" class="form-control" name="titulo" placeholder="Ingeniero en sistemas" value="">
                  </div>
                </div>
                <div class="col-6">
                  <div class="input-group input-group-static">
                    <label>Realizo algun curso en el Polo Tecnoligico La Rioja (Especifique cual)</label>
                    <input type="text" class="form-control" name="curso_polo" placeholder="Metodologias Agiles" value="">
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-6">
                  <div class="input-group input-group-static">
                    <label>Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha_de_nacimiento" placeholder="Fecha de nacimiento" value="<?php echo $fecha_de_nacimiento; ?>">
                  </div>
                </div>
                <div class="col-6">
                  <div class="input-group input-group-static">
                    <label>Numero de contacto</label>
                    <input type="number" class="form-control" name="telefono" placeholder="+54 380 4000000" value="<?php echo $telefono; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <label class="form-label mt-4 ms-0">Lugar de residencia</label>
                  <select class="form-control" name="residencia" id="choices-language" value="<?php echo $residencia; ?>">
                    <option value="argentina">Argentina</option>
                    <option value="exterior">Exterior de Argentina</option>
                    
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label mt-4">En caso de recidir en el Exterior, especifique el pais.</label>
                  <input type="text" class="form-control" name="recide_en_exterior" placeholder="Chile, Brazil, etc." value=""/>
                </div>
              </div>
              
                                  <legend><h5>Información sobre uso en leguagues de programacion.</h5></legend>
             
                <div class="row">
                  <div class="col-sm-4 col-6">
                    <label class="form-label mt-4 ms-0">Java</label>
                    <select class="form-control" name="java" value="<?php echo $java; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  <div class="col-sm-4 col-6">
                    <label class="form-label mt-4 ms-0">.NET</label>
                    <select class="form-control" name="net" value="<?php echo $net; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  <div class="col-sm-4 col-6">
                    <label class="form-label mt-4 ms-0">C / C++</label>
                    <select class="form-control" name="c" value="<?php echo $c; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                </div>

              <div class="row">
                <div class="col-sm-4 col-6">
                    <label class="form-label mt-4 ms-0">c#</label>
                    <select class="form-control" name="c_tag" value="<?php echo $c_tag; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                </div>
                  <div class="col-sm-4 col-6">
                    <label class="form-label mt-4 ms-0">Javascript</label>
                    <select class="form-control" name="javascript" value="<?php echo $javascript; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  <div class="col-sm-4 col-6">
                    <label class="form-label mt-4 ms-0">Python</label>
                    <select class="form-control" name="python" value="<?php echo $python; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
              </div>

              <div class="row">
                <div class="col-sm-4 col-6">
                    <label class="form-label mt-4 ms-0">Visual Basic</label>
                    <select class="form-control" name="visualbasic" value="<?php echo $visualbasic; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  <div class="col-sm-4 col-6">
                    <label class="form-label mt-4 ms-0">HTML / CSS</label>
                    <select class="form-control" name="html_css" value="<?php echo $html_css; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  <div class="col-sm-4 col-6">
                    <label class="form-label mt-4 ms-0">PHP</label>
                    <select class="form-control" name="php" value="<?php echo $php; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
              </div>

              <div class="input-group input-group-outline">
               <!-- <label class="form-label">Experiencia en otro lenguaje de programación:</label>
                <input type="text" class="form-control" name="extra_programacion" value="<?php echo $extra_programacion; ?>">
  -->           <?php
// Define $extra_programacion con un valor predeterminado si aún no está definido
                    if (!isset($extra_programacion)) {
                          $extra_programacion = "";
                    }
                    ?>
                    <input type="text" class="form-control" name="extra_programacion" value="<?php echo $extra_programacion; ?>"                     onfocus="focused(this)" onfocusout="defocused(this)">                    

              </div>


                                  <legend><h5>Experiencia en utilización de Motores de Bases de Datos:</h5></legend>
             
                <div class="row">
                  <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">SQL Server</label>
                    <select class="form-control" name="sql_server" value="<?php echo $sql_server; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">MySQL</label>
                    <select class="form-control" name="mysql" value="<?php echo $mysql; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  
                </div>

              <div class="row">
                <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">Postgre</label>
                    <select class="form-control" name="postgre" value="<?php echo $postgre; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                </div>
                  <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">Oracle</label>
                    <select class="form-control" name="oracle" value="<?php echo $oracle; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  
              </div>

              <div class="input-group input-group-outline">
                <label class="form-label">Experiencia en uso de otro motor de Base de Datos:</label>
                <input type="text" class="form-control" name="extra_db" value="<?php echo $extra_db; ?>">
              </div>


                                  <legend><h5>Experiencia en utilización de Sistemas Operativos y Plataformas:</h5></legend>
             
                <div class="row">
                  <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">Linux</label>
                    <select class="form-control" name="linux" value="<?php echo $linux; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">Windows Server</label>
                    <select class="form-control" name="windows_server" value="<?php echo $windows_server; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  
                </div>

              <div class="row">
                <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">IOS</label>
                    <select class="form-control" name="ios" value="<?php echo $ios; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                </div>
                  <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">Android</label>
                    <select class="form-control" name="android" value="<?php echo $android; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  
              </div>

              <div class="input-group input-group-outline">
                <label class="form-label">Experiencia en utilización de otros Sistemas Operativos o Plataformas:</label>
                <input type="text" class="form-control" name="extra_sistemas_operativos" value="<?php echo $extra_sistemas_operativos; ?>">
              </div>

                                  <legend><h5>Experiencia en el uso de otras herramientas o metodologías:</h5></legend>
             
                <div class="row">
                  <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">Sistemas de Información Geográfico</label>
                    <select class="form-control" name="sistemas_geo" value="<?php echo $sistemas_geo; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">Repositorios de la nube (ej. Github)</label>
                    <select class="form-control" name="github" value="<?php echo $github; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  
                </div>

              <div class="row">
                <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">Computación en la nube (ej. Azure, AWS o Google Cloud)</label>
                    <select class="form-control" name="computacion_nube" value="<?php echo $computacion_nube; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                </div>
                  <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">Metodologías ágiles (scrum/xp)</label>
                    <select class="form-control" name="metodologias_agiles" value="<?php echo $metodologias_agiles; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  
              </div>


              <div class="row">
                <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">Project Management Institute (PMI)</label>
                    <select class="form-control" name="pmi" value="<?php echo $pmi; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                </div>
                  <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">Tecnologías de Ciencia de Datos</label>
                    <select class="form-control" name="ciencia_de_datos" value="<?php echo $ciencia_de_datos; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                  </div>
                  
              </div>

              <div class="row">
                <div class="col-sm-6 col-6">
                    <label class="form-label mt-4 ms-0">Almacén y Análsis de Datos (Data warehouse)</label>
                    <select class="form-control" name="data_wh" value="<?php echo $data_wh; ?>" >
                      <option value="" disabled selected>Seleccione su nivel.</option>
                      <option value="No tiene comonocimientos en el area.">Nulo</option>
                      <option value="Tiene conocimientos basicos, pero no puede realizar tareas por su cuenta.">Utilice el programa, pero necesito una tutoria.</option>
                      <option value="Tiene conocientos basicos, puede realizar tareas sensillas.">Puedo realizar algunos comandos basicos, por cuenta propia.</option>
                      <option value="Tiene experiencia, puede realizar tareas complejas.">tengos mas de 2 años de experiencia en el lenguaje, y lo conozco en profundidad.</option>
                      <option value="Amplia experiencia en el area, con certificaciones que avalan sus conocimientos.">tengos mas de 5 años de experiencia en el lenguaje, y Cerficaciones.</option>
                    </select>
                </div>
                 
              </div>

              <legend><h5>Otros Conocimientos Tecnicos:</h5></legend>

              <div class="input-group input-group-outline">
                <label class="form-label">Otros conocimientos técnicos:</label>
                <input type="text" class="form-control" name="extra_it" value="<?php echo $extra_it; ?>">
              </div>

              <div class="input-group input-group-outline">
                <label class="form-label">Experiencia en desarrollo (destaque algún trabajo realizado):</label>
                <input type="text" class="form-control" name="experiencia_dev" value="<?php echo $experiencia_dev; ?>">
              </div>

              <div class="input-group input-group-outline">
                <label class="form-label">Experiencia en administración o gestión de sistemas informáticos:</label>
                <input type="text" class="form-control" name="experiencia_it" value="<?php echo $experiencia_it; ?>">
              </div>

              <div class="input-group input-group-outline">
                <label class="form-label">Debilidades técnicas/profesionales y personales</label>
                <input type="text" class="form-control" name="debilidades" value="<?php echo $debilidades; ?>">
              </div>

              <div class="input-group input-group-outline">
                <label class="form-label">Experiencia en utilización de otros Sistemas Operativos o Plataformas:</label>
                <input type="text" class="form-control" name="extra_sistemas" value="<?php echo $extra_sistemas; ?>">
              </div>

              <div class="input-group input-group-static mb-4">
                <label for="exampleFormControlSelect1" class="ms-0">Nivel de capacitacion de ingles:</label>
                <select class="form-control" name="ingles" value="<?php echo $ingles; ?>">
                    <option value="No tiene comonocimientos en el lenguage.">Ninguno</option>
                    <option value="Tiene conocimientos basicos.">Basico</option>
                    <option value="Puede comprender un texto a la perfeccion, pero no asi tener una conversacion fluida">Puedo comprender un texto a la perfeccion, pero no asi tener una conversacion fluida</option>
                    <option value="Puede comprender un texto a la perfeccion, y mantener una conversacion fluida">Puedo comprender un texto a la perfeccion, y mantener una conversacion fluida</option>
                    <option value="Tiene amplia expeciencia en el lenguaje, y cuenta con cerficaciones.">tengo amplia expeciencia en el lenguaje, y Cerficaciones.</option>
                </select>
              </div>

              <div class="input-group input-group-outline">
                <label class="form-label">Si esta capacitado en otros idiomas listelos y decriba su nivel/capacitacion:</label>
                <input type="text" class="form-control" name="extra_idiomas" value="<?php echo $extra_idiomas; ?>">
              </div>

              <h5>Remuneracion Salarial</h5>

              <div class="input-group input-group-static mb-4">
                <label for="exampleFormControlSelect1" class="ms-0">Modalidad de Trabajo Actual:</label>
                <select class="form-control" name="trabajo_actual" value="<?php echo $trabajo_actual; ?>">
                  <option value="" disabled selected>Situacion Actual</option>
                  <option value="Sin trabajo">Sin trabajo</option>
                  <option value="Trabajos Temporales">Trabajos Temporales o informales</option>
                  <option value="Monotributista / Independiente">Monotributista / Independiente</option>
                  <option value="Trabaja en ralecion de dependencia">Relación de dependencia</option>
                </select>
              </div>
              
              <div class="input-group input-group-static mb-4">
                <label for="exampleFormControlSelect1" class="ms-0">Disponibilidad Horaria:</label>
                <select class="form-control" name="disponibilidad" value="<?php echo $disponibilidad; ?>">
                        <option value="" disabled selected>Disponibilidad Horaria</option>
                        <option value="Media Jornada diurna">Media Jornada por la mañana</option>
                        <option value="Media Jornada por la tarde">Media Jornada por la tarde</option>
                        <option value="Disponibilidad Full-time">Disponibilidad Full-time</option>
                </select>
              </div>
            
              <div class="input-group input-group-static mb-4">
                <label for="exampleFormControlSelect1" class="ms-0">Remuneración Actual:</label>
                <select class="form-control" name="remuneracion_actual" value="<?php echo $remuneracion_actual; ?>">
                  <option value="" disabled selected>Remuneración Actual</option>
                  <option value="Entre $30.000 y $60.000">Entre $30.000 y $60.000</option>
                  <option value="Entre $60.000 y $100.000">Entre $60.000 y $100.000</option>
                  <option value="Entre $100.000 y $160.000">Entre $100.000 y $160.000</option>
                  <option value="Mas de $160.000">Mas de $160.000</option>
                  <option value="No tiene ingresos actualmente">No tiene ingresos actualmente</option>
                </select>
              </div>

              <div class="input-group input-group-outline">
                <label class="form-label">Remuneración mensual pretendida (tomando como parametros una jornada de 8 horas,5 semanales):</label>
                <input type="text" class="form-control" name="remuneracion_pretendida" value="<?php echo $remuneracion_pretendida; ?>">
              </div>

              
              <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Enviar Formulario</button>
            </div>
            </div>
          </form>
          <!-- Card Change Password -->
          <div class="card mt-4" id="password">
            <div class="card-header">
              <h5>Cambiar la contraseña</h5>
            </div>
            <div class="card-body pt-0">
              <div class="input-group input-group-outline">
                <label class="form-label">Contraseña actual</label>
                <input type="password" class="form-control">
              </div>
              <div class="input-group input-group-outline my-4">
                <label class="form-label">Nueva contraseña</label>
                <input type="password" class="form-control">
              </div>
              <div class="input-group input-group-outline">
                <label class="form-label">Confirme su nueva contraseña</label>
                <input type="password" class="form-control">
              </div>
              <h5 class="mt-5">Al cambiar su contraseña debe tener en cuenta que:</h5>
              <p class="text-muted mb-2">
                Tenga en cuanta algunos consejos para mejorar su seguridad.
              </p>
              <ul class="text-muted ps-4 mb-0 float-start">
               
                <li>
                  <span class="text-sm">Un minimo de 8 caracteres</span>
                </li>
                <li>
                  <span class="text-sm">Recomendamos usar caracteres Alfanumerico</span>
                </li>
                <li>
                  <span class="text-sm">Cambiela con frecuencia</span>
                </li>
              </ul>
              <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Actualiza Contraseña</button>
            </div>
          </div>
          <!-- Card Change Password -->
          <!-- Card notificaciones-->
        
          <div class="card mt-4" id="notifications">
            <div class="card-header">
              <h5>Notificaciones</h5>
              <p class="text-sm">Elija cuando recibir notificaciones, y mantengase al tanto de sus actividades.</p>
            </div>
            <div class="card-body pt-0">
              <div class="table-responsive">
                <table class="table mb-0">
                  <thead>
                    <tr>
                      <th class="ps-1" colspan="4">
                        <p class="mb-0">Activity</p>
                      </th>
                      <th class="text-center">
                        <p class="mb-0">E-mail</p>
                      </th>
                      <th class="text-center">
                        <p class="mb-0">Alertas al iniciar</p>
                      </th>
                      <th class="text-center">
                        <p class="mb-0">SMS</p>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ps-1" colspan="4">
                        <div class="my-auto">
                          <span class="text-dark d-block text-sm">Actividad en una Busqueda</span>
                          <span class="text-xs font-weight-normal">Cuando alguien necesite contactarse conmigo</span>
                        </div>
                      </td>
                      <td>
                        <div class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                          <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault11">
                        </div>
                      </td>
                      <td>
                        <div class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault12">
                        </div>
                      </td>
                      <td>
                        <div class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault13">
                        </div>
                      </td>
                    </tr>
                   
             
                    <tr>
                      <td class="ps-1" colspan="4">
                        <div class="my-auto">
                          <p class="text-sm mb-0">Inicio de Sesion desde un nuevo dispositivo</p>
                        </div>
                      </td>
                      <td>
                        <div class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                          <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault20">
                        </div>
                      </td>
                      <td>
                        <div class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                          <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault21">
                        </div>
                      </td>
                      <td>
                        <div class="form-check form-switch mb-0 d-flex align-items-center justify-content-center">
                          <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckDefault22">
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Card Sessions -->
          <div class="card mt-4" id="sessions">
            <div class="card-header pb-3">
              <h5>Sesiones activas</h5>
              <p class="text-sm">Esta es una lista de los dispositivos en los que se a mantenido coneccion, te recomendamos cambiar la contraseña si encuentras alguno desconocido</p>
            </div>
            <div class="card-body pt-0">
              <div class="d-flex align-items-center">
                <div class="text-center w-5">
                  <i class="fas fa-desktop text-lg opacity-6"></i>
                </div>
                <div class="my-auto ms-3">
                  <div class="h-100">
                    <p class="text-sm mb-1">
                      Argentina, La rioja 68.133.163.201
                    </p>
                    <p class="mb-0 text-xs">
                      Sesion Actual
                    </p>
                  </div>
                </div>
                <span class="badge badge-success badge-sm my-auto ms-auto me-3">Activa</span>
                <p class="text-secondary text-sm my-auto me-3">ARG</p>
                <a href="javascript:;" class="text-primary text-sm icon-move-right my-auto">Ver mas
                  <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                </a>
              </div>
              <hr class="horizontal dark">
          
              <hr class="horizontal dark">
              <div class="d-flex align-items-center">
                <div class="text-center w-5">
                  <i class="fas fa-mobile text-lg opacity-6"></i>
                </div>
                <p class="my-auto ms-3">Safari on iPhone</p>
                <p class="text-secondary text-sm ms-auto my-auto me-3">ARG</p>
                <a href="javascript:;" class="text-primary text-sm icon-move-right my-auto">Ver mas
                  <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- Card Delete Account -->
          <div class="card mt-4" id="delete">
            <div class="card-body">
              <div class="d-flex align-items-center mb-sm-0 mb-4">
                <div class="w-50">
                  <h5>Borrar tu Cuenta</h5>
                  <p class="text-sm mb-0">Por favor elimina tu cuenta solo si estas seguro! Te puedes tomar un tiempo y desactivarla si es necesario.</p>
                </div>
                <div class="w-50 text-end">
                  <button class="btn btn-outline-secondary mb-3 mb-md-0 ms-auto" type="button" name="button">Desactivar</button>
                  <button class="btn bg-gradient-danger mb-0 ms-2" type="button" name="button">Eliminar Cuenta</button>
                </div>
              </div>
            </div>
          </div>
        
      </div>
    
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Seccion de Estilos</h5>
          <p>Personalice la experiencia de usuario.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">

        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Estilo Del sitio</h6>
          <p class="text-sm">Personalice el color de la barra lateral</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Negro</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparente</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">Claro</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Claro / Oscuro</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-primary w-100" href="#">Ir al Sitio</a>
        <a class="btn bg-gradient-info w-100" href="#">Contacto</a>
        <a class="btn btn-outline-dark w-100" href="#">Otro</a>
        <div class="w-100 text-center">
          <h6 class="mt-3">Compartir en Redes Sociales!</h6>
          <a href="#" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="#" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Compartir
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="assets/js/plugins/choices.min.js"></script>
  <!-- Kanban scripts -->
  <script src="assets/js/plugins/dragula/dragula.min.js"></script>
  <script src="assets/js/plugins/jkanban/jkanban.js"></script>
  <script>
    if (document.getElementById('choices-gender')) {
      var gender = document.getElementById('choices-gender');
      const example = new Choices(gender);
    }

    if (document.getElementById('choices-language')) {
      var language = document.getElementById('choices-language');
      const example = new Choices(language);
    }
    if (document.getElementById('php')) {
      var language = document.getElementById('php');
      const example = new Choices(php);
    }
    if (document.getElementById('col1')) {
      var language = document.getElementById('col1');
      const example = new Choices(col1);
    }

    if (document.getElementById('choices-skills')) {
      var skills = document.getElementById('choices-skills');
      const example = new Choices(skills, {
        delimiter: ',',
        editItems: true,
        maxItemCount: 5,
        removeItemButton: true,
        addItems: true
      });
    }

    if (document.getElementById('choices-year')) {
      var year = document.getElementById('choices-year');
      setTimeout(function() {
        const example = new Choices(year);
      }, 1);

      for (y = 1900; y <= 2020; y++) {
        var optn = document.createElement("OPTION");
        optn.text = y;
        optn.value = y;

        if (y == 2020) {
          optn.selected = true;
        }

        year.options.add(optn);
      }
    }

    if (document.getElementById('choices-day')) {
      var day = document.getElementById('choices-day');
      setTimeout(function() {
        const example = new Choices(day);
      }, 1);


      for (y = 1; y <= 31; y++) {
        var optn = document.createElement("OPTION");
        optn.text = y;
        optn.value = y;

        if (y == 1) {
          optn.selected = true;
        }

        day.options.add(optn);
      }

    }

    if (document.getElementById('choices-month')) {
      var month = document.getElementById('choices-month');
      setTimeout(function() {
        const example = new Choices(month);
      }, 1);

      var d = new Date();
      var monthArray = new Array();
      monthArray[0] = "Enero";
      monthArray[1] = "Febrero";
      monthArray[2] = "Marzo";
      monthArray[3] = "Abril";
      monthArray[4] = "Mayo";
      monthArray[5] = "Junio";
      monthArray[6] = "Julio";
      monthArray[7] = "Agostos";
      monthArray[8] = "Septiembre";
      monthArray[9] = "Octubre";
      monthArray[10] = "Noviembre";
      monthArray[11] = "Diciembre";
      for (m = 0; m <= 11; m++) {
        var optn = document.createElement("OPTION");
        optn.text = monthArray[m];
        // server side month start from one
        optn.value = (m + 1);
        // if june selected
        if (m == 1) {
          optn.selected = true;
        }
        month.options.add(optn);
      }
    }


    var openFile = function(event) {
      var input = event.target;

      // Instantiate FileReader
      var reader = new FileReader();
      reader.onload = function() {
        imageFile = reader.result;

        document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile + '" class="rounded-circle w-100 shadow" />';
      };
      reader.readAsDataURL(input.files[0]);
    };
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=3.0.6"></script>
</body>

</html>