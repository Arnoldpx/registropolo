    <?php
        // Validar id valido Hay que cambiar el Id a un INT porque me lo toma como STR
        $id = $_GET['id'];
        //$id = filter_var($id, FILTER_VALIDATE_INT);
        //if(!$id); {
         //   header('Location: ../');
        // }
        
        
        
        // Coneccion DB
        require  "../../includes/config/database.php";
        $db = conectarDB();
            //where id = ${id}
        // Obtener los datos de la propiedad
        
        
    // Prepare the SQL query
    $consulta = "SELECT * FROM registro.form_personas WHERE id = ?";
    $stmt = $db->prepare($consulta);
        
    // Bind the parameter
    $stmt->bind_param("i", $id);
        
    // Execute the query
    $stmt->execute();
        
    // Get the result
    $resultadoConsulta = $stmt->get_result();
   
        
    // Fetch the data
    while ($row = $resultadoConsulta->fetch_assoc()) {
    // Access the data using the column names
        $id = $row["id"];
        $nombre = $row["nombre"];
        $apellido = $row ["apellido"];
        $localidad = $row ["localidad"];
        $estudios = $row ["estudios"];
        $especializacion  = $row ["especializacion"];
        $genero = $row ["genero"];
        $titulo = $row ["titulo"];
        $curso_polo = $row ["curso_polo"];
        $fecha_de_nacimiento = $row ["fecha_de_nacimiento"];
        $telefono = $row ["telefono"];
        $residencia = $row ["residencia"];
        $recide_en_exterior = $row ["recide_en_exterior"];
        $java = $row ["java"];
        $net = $row ["net"];
        $c = $row ["c"];
        $c_tag = $row ["c_tag"];
        $javascript = $row ["javascript"];
        $python = $row ["python"];
        $visualbasic = $row ["visualbasic"];
        $html_css = $row ["html_css"];
        $php = $row ["php"];
        $extra_programacion = $row ["extra_programacion"];
        $sql_server = $row ["sql_server"];
        $mysql = $row ["mysql"];
        $postgre = $row ["postgre"];
        $oracle = $row ["oracle"];
        $extra_db = $row ["extra_db"];
        $linux = $row ["linux"];
        $windows_server = $row ["windows_server"];
        $ios = $row ["ios"];
        $android = $row ["android"];
        $extra_sistemas_operativos = $row ["extra_sistemas_operativos"];
        $sistemas_geo = $row ["sistemas_geo"];
        $github = $row ["github"];
        $computacion_nube = $row ["computacion_nube"];
        $metodologias_agiles = $row ["metodologias_agiles"];
        $pmi = $row ["pmi"];
        $ciencia_de_datos = $row ["ciencia_de_datos"];
        $data_wh = $row ["data_wh"];
        $extra_it = $row ["extra_it"];
        $experiencia_dev = $row ["experiencia_dev"];
        $experiencia_it = $row ["experiencia_it"];
        $debilidades = $row ["debilidades"];
        $extra_sistemas = $row ["extra_sistemas"];
        $ingles = $row ["ingles"];
        $extra_idiomas = $row ["extra_idiomas"];
        $trabajo_actual = $row ["trabajo_actual"];
        $disponibilidad = $row ["disponibilidad"];
        $remuneracion_actual = $row ["remuneracion_actual"];
        $remuneracion_pretendida = $row ["remuneracion_pretendida"];
    }
       
        

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
<title>Registro PoloTecnologíco</title>
</head>
<body class="g-sidenav-show  bg-gray-100">
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
          <div class="collapse" id="ProfileNav" style="">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link text-white " data-scroll="#profile" href="/polo/dashboard/index.php">
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
                  <img src="assets/img/bruce-mars.jpg" alt="bruce" class="w-100 rounded-circle shadow-sm">
                </div>
              </div>
              <div class="col-sm-auto col-8 my-auto">
                <div class="h-100">
                  <h5 class="mb-1 font-weight-bolder">
                  <?php echo $nombre . " " . $apellido ?>
                  </h5>
                  <p class="mb-0 font-weight-normal text-sm">
                  <?php echo $especializacion ?>
                  </p>
                </div>
              </div>
             
            </div>
          </div>
          
          <!-- Card Change Password -->
          <div class="card mt-4" id="password">
    <div class="card-header">
        <h5>Perfil del Candidato</h5>
    </div>
    <div class="card-body pt-0">
        <h4>Información Personal</h4>
        <?php foreach ($row as $campo => $valor): ?>
            <h6><?php echo ucfirst(str_replace("_", " ", $campo)) . ": " . $valor; ?></h6>
        <?php endforeach; ?>
        
        <button class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0" href="\registro\dashboard\pages\applications\datatables.php">Volver al Registro</button>
    </div>
</div>
          <!-- Card Change Password -->
         
        
        
          </div>
        
      </div>
    
    </div>
  </main>
 
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


<?php
mysqli_close($db);
?>
</body>

</html>