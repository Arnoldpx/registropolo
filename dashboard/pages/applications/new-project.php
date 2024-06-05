<?php
    // Coneccion DB
    require  "../../../includes/config/database.php";
    $db = conectarDB();

    // Array con msj de errores 
    $errores = [];

    
    $titulo = '';
    $descripcion = '';
    $etiquetas = '';
    $fecha_inicio = '';
    $fecha_final = '';
    $carga_de_archivos = '';
    
   
    

    // solicitud del form
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        /* echo"<pre>";
        var_dump($_POST["nombre"]);
        echo"</pre>"; */

        $titulo = mysqli_real_escape_string( $db, $_POST["titulo"] );
        $descripcion = mysqli_real_escape_string( $db, $_POST["descripcion"] );
        $etiquetas = mysqli_real_escape_string( $db, $_POST["etiquetas"] );
        $fecha_inicio = mysqli_real_escape_string( $db, $_POST["fecha_inicio"] );
        $fecha_final = mysqli_real_escape_string( $db, $_POST["fecha_final"] );
        $carga_de_archivos = mysqli_real_escape_string( $db, $_POST["carga_de_archivos"] );
     
       
        
        if (!$titulo) {
            $errores[] = "Debes agregar un titulo en el formulario";
        }

        if (!$descripcion) {
            $errores[] = "Debes agregar una descripcion en el formulario";
        }

        }
        if (!$fecha_inicio) {
            $errores[] = "Debes agregar una fecha de inicio en el formulario";
        }
        if (!$fecha_final) {
            $errores[] = "Debes agregar una fecha final en el formulario";
        }
     
        // Revisar que el array $errores esta vacio
        if(empty($errores)) {
        // Insertar en la base de datos
        $query = "INSERT INTO polo_crud.empleo
        (titulo, descripcion, etiquetas, fecha_inicio, fecha_final, carga_de_archivos)
        VALUES('$titulo', '$descripcion', '$etiquetas', '$fecha_inicio', '$fecha_final', '$carga_de_archivos')";
        
        $resultado = mysqli_query ($db, $query);

        if ($resultado) {
            header('Location: ./timeline.php');
            } 
        }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../../assets/img/PoloTecLogo.png">
  <title>
    Registro PoloTecnologíco
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
  <link id="pagestyle" href="../../../assets/css/material-dashboard.css?v=3.0.6" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">

<!-- alertas -->
        <?php foreach($errores as $error): ?>
        <div class="alerta error">
        <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

<div class="sidenav-header">
  <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0" href="/registro/index.php" target="_blank">
    <img src="/registro/dashboard/assets/img/PoloTecLogo.png" class="navbar-brand-img h-100" alt="main_logo">
    <span class="ms-1 font-weight-bold text-white">Registro PoloTecnologíco</span>
  </a>
</div>


<hr class="horizontal light mt-0 mb-2">

<div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
  <ul class="navbar-nav">
    
      <!-- nav perfil intro -->
      <li class="nav-item mb-2 mt-0">
        <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
          <img src="/registro/dashboard/assets/img/PoloTecLogo.png" class="avatar">
          <span class="nav-link-text ms-2 ps-1">Uriel Piquera</span>
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
  
    <li class="nav-item ">
      <a class="nav-link text-white " href="/registro/dashboard/pages/applications/datatables.php">
        <span class="sidenav-mini-icon"> R </span>
        <span class="sidenav-normal  ms-2  ps-1"> Registro </span>
      </a>        
    </li>

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
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
          <a href="javascript:;" class="nav-link text-body p-0">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Search here</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item">
              <a href="../../../pages/authentication/signin/illustration.html" class="nav-link text-body p-0 position-relative" target="_blank">
                <i class="material-icons me-sm-1">
              account_circle
            </i>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="material-icons fixed-plugin-button-nav cursor-pointer">
              settings
            </i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2">
              <a href="javascript:;" class="nav-link text-body p-0 position-relative" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons cursor-pointer">
              notifications
            </i>
                <span class="position-absolute top-5 start-100 translate-middle badge rounded-pill bg-danger border border-white small py-1 px-2">
                  <span class="small">11</span>
                  <span class="visually-hidden">unread notifications</span>
                </span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end p-2 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex align-items-center py-1">
                      <span class="material-icons">email</span>
                      <div class="ms-2">
                        <h6 class="text-sm font-weight-normal my-auto">
                          Check new messages
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex align-items-center py-1">
                      <span class="material-icons">podcasts</span>
                      <div class="ms-2">
                        <h6 class="text-sm font-weight-normal my-auto">
                          Manage podcast session
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex align-items-center py-1">
                      <span class="material-icons">shopping_cart</span>
                      <div class="ms-2">
                        <h6 class="text-sm font-weight-normal my-auto">
                          Payment successfully completed
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <form class="formulario" method="POST" action="./new-project.php">
    <div class="container-fluid py-4">
      <div class="row mt-4">
        <div class="col-lg-9 col-12 mx-auto position-relative">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 me-3 float-start">
                <i class="material-icons opacity-10">event</i>
              </div>
              <h6 class="mb-0">Generar una nueva Busqueda</h6>
            </div>
            <div class="card-body pt-2">
              <div class="input-group input-group-dynamic">
                <label for="projectName" class="form-label">Ingrese el titulo de la Busqueda</label>
                <input type="text" class="form-control" id="projectName" name="titulo" value="<?php echo $titulo; ?>">
              </div>
              <div class="row mt-4">
                <div class="col-12 col-md-6">
                  
                </div>
              </div>
              <label class="mt-4">Descripcion de la Busqueda</label>
              <p class="form-text text-muted ms-1">
                Ingrese una breve descripcion del puesto que es necesario cubrir, incluyendo tareas que se desenpeñaran, requisitos para el puesto y habilidades que no sean requeridas pero ayudarian a la hora de desempeñar las tareas. 
              </p>
              <div id="editor" name="descripcion" value="<?php echo $descripcion; ?> ">
                <p>Hola!<strong>¿Quienes somos?</strong></p>
                <p>Para desenpeñar este rol es  <strong>necesario</strong> :</p>
                <p>Lo que <strong>ofrecemos</strong> a nuestros colaboradores:</p>
                <p>Habilidades <strong>Deseables</strong> a la hora de eligir un candidato:</p>
                <p><br></p>
              </div>
              <label class="mt-4 form-label">Tags de la Busqueda</label>
              <select size="1" class="form-control" name="choices-multiple-remove-button" id="choices-multiple-remove-button" multiple name="etiquetas" value="<?php echo $etiquetas; ?>">
                <option value="etiquetas" selected>Busqueda de Personal</option>
                <option value="2">Desarrollador</option>
                <option value="3">Ingenieria</option>
                <option value="4">community manager</option>
              </select>
              <div class="row">
                <div class="col-6">
                  <div class="input-group input-group-static">
                    <label>Fecha de incio de la Busqueda</label>
                    <input class="form-control datetimepicker" type="text" data-input name="fecha_inicio" value="<?php echo $fecha_inicio ?>o;">
                  </div>
                </div>
                <div class="col-6">
                  <div class="input-group input-group-static">
                    <label>Hasta que fecha seguira la Busqueda</label>
                    <input class="form-control datetimepicker" type="text" data-input name="fecha_final" value="<?php echo $fecha_final; ?>">
                  </div>
                </div>
              </div>
              <div class="input-group input-group-dynamic mt-4">
                <label class="form-label">Archivos adjuntos:</label>
                <form action="/file-upload" class="form-control dropzone" id="dropzone" name="archivo_carga" value="<?php echo $archivo_carga; ?>">
                  <div class="fallback">
                    <input name="file" type="file" multiple />
                  </div>
                </form>
              </div>
              <div class="d-flex justify-content-end mt-4">
                <button type="button" name="button" class="btn btn-light m-0">Volver</button>
                <button type="submit" name="button" class="btn bg-gradient-dark m-0 ms-2">Iniciar Busqueda</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </main>

  <!--   Core JS Files   -->
  <script src="../../../assets/js/core/popper.min.js"></script>
  <script src="../../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../../../assets/js/plugins/choices.min.js"></script>
  <script src="../../../assets/js/plugins/quill.min.js"></script>
  <script src="../../../assets/js/plugins/flatpickr.min.js"></script>
  <script src="../../../assets/js/plugins/dropzone.min.js"></script>
  <script>
    if (document.getElementById('editor')) {
      var quill = new Quill('#editor', {
        theme: 'snow' // Specify theme in configuration
      });
    }
    
    if (document.getElementById('choices-multiple-remove-button')) {
      var element = document.getElementById('choices-multiple-remove-button');
      const example = new Choices(element, {
        removeItemButton: true
      });

      example.setChoices(
        [{
            value: 'noce',
            label: 'Selecione las etiquetas que desea',
            disabled: true
          },
          {
            value: 'PoloTecnologíco',
            label: 'PoloTecnologíco',
            selected: true
          },
          {
            value: 'etiqueta',
            label: 'etiqueta custom'
          },
        ],
        'value',
        'label',
        false,
      );
    }

    if (document.querySelector('.datetimepicker')) {
      flatpickr('.datetimepicker', {
        allowInput: true
      }); // flatpickr
    }

    Dropzone.autoDiscover = false;
    var drop = document.getElementById('dropzone')
    var myDropzone = new Dropzone(drop, {
      url: "/file/post",
      addRemoveLinks: true

    });
  </script>
  <!-- Kanban scripts -->
  <script src="../../../assets/js/plugins/dragula/dragula.min.js"></script>
  <script src="../../../assets/js/plugins/jkanban/jkanban.js"></script>
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
  <script src="../../../assets/js/material-dashboard.min.js?v=3.0.6"></script>
</body>

</html>