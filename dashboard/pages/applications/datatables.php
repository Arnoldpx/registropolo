<?php
 //var_dump($_GET);

    //$id = $_GET['id'];
    //$id = filter_var($id, FILTER_VALIDATE_INT);
// Verificar que el usuario esté logeado
require "../../../includes/funciones.php";
// $auth = estaAutenticado();

/* if (!$auth) {
    header('Location: ../');
} */

// Importar la conexión PDO
require "../../../includes/config/database.php";
$db = conectarDB();

// Escribir el Query
$sql = "SELECT * FROM form_personas";
$resultadoConsulta = $db->query($sql);

// Obtener los resultados de la consulta
$personas = $resultadoConsulta->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/registro/assets/img/PoloTecLogo.png">
  <title>
    Registro PoloTecnologíco
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
  <link id="pagestyle" href="../../assets/css/material-dashboard.css?v=3.0.6" rel="stylesheet" />
  <!-- data tables Files -->

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> 
  <link id="pagestyle" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" />
  <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready(function() {
        $('#example').DataTable();
      });
    </script>
</head>

<body class="g-sidenav-show  bg-gray-200">
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
    
  <div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Registro de PoloTecnológico</h5>
                    <p class="text-sm mb-0">
                </div>
                <!-- Card header -->
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Disponibilidad</th>
                            <th>Area de Especialización</th>
                            <th>Localidad</th>
                            <th>Residencia</th>
                            <th>CV</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($personas as $persona): ?>
                            <tr>
                                <td><?php echo $persona['id']; ?></td>
                                <td><?php echo $persona['nombre']; ?></td>
                                <td><?php echo $persona['apellido']; ?></td>
                                <td><?php echo $persona['disponibilidad']; ?></td>
                                <td><?php echo $persona['especializacion']; ?></td>
                                <td><?php echo $persona['localidad']; ?></td>
                                <td><?php echo $persona['residencia']; ?></td>
                                <td>
                                    <a href="/registro/dashboard/pages/applications/perfil.php?id=<?php echo $persona['id']; ?>" class="btn btn-outline-default">Ver Perfil Completo</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
  
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../../assets/js/plugins/datatables.js"></script>
  <!-- Kanban scripts -->
  <script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
  <script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
  
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script>
$(document).ready( function () {
    $('#tabla').DataTable( {
        fixedHeader: true;
        data: <?php echo $json_data; ?>,
        columns: [
            { data: "nombre" },
            { data: "apellidos" },
            { data: "residencia" },
            { data: "telefono" },
            { data: "localidad" },
            { data: "genero" }],
        buttons: [
        'copy', 'excel', 'pdf'
        ],
        
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
          }
    } );
} );
</script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/material-dashboard.min.js?v=3.0.6"></script>
</body>

</html>