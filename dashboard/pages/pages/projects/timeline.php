<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../../assets/img/PoloTecLogo.png">
  <title>
    Registro Economia del Conocimiento
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
        <div class="collapse" id="ProfileNav" >
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
  <!-- Navbar -->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row gx-4">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header pb-0">
              <h6>Propuestas Laborales Activas</h6>
            </div>
            <div class="card-body p-3">
              <div class="timeline timeline-one-side" data-timeline-axis-style="dotted">
                <div class="timeline-block mb-3">
                  <span class="timeline-step bg-dark p-3">
                    <i class="material-icons text-white text-sm opacity-10">
            notifications
          </i>
                  </span>
                  <div class="timeline-content pt-1">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Busqueda de personal Front end</h6>
                    <p class="text-secondary text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                    <p class="text-sm text-dark mt-3 mb-2">
                      ¡Estamos buscando un Programador Junior para unirse a nuestro equipo multidisciplinar en pleno proceso de expansión!
                    </p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step bg-primary p-3">
                    <i class="material-icons text-white text-sm opacity-10">
            code
          </i>
                  </span>
                  <div class="timeline-content pt-1">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Busqueda de personal Back end</h6>
                    <p class="text-secondary text-xs mt-1 mb-0">21 DEC 11 PM</p>
                    <p class="text-sm text-dark mt-3 mb-2">
                      Somos una empresa especializada en automatización y control de sistemas y procesos con reconocida trayectoria en el mercado desde 1997.
                    </p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step bg-success p-3">
                    <i class="material-icons text-white text-sm opacity-10">
            shopping_cart
          </i>
                  </span>
                  <div class="timeline-content pt-1">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Busqueda de personal para gestion de servidores</h6>
                    <p class="text-secondary text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                    <p class="text-sm text-dark mt-3 mb-2">
                      React Developer Semi senior / senior

                      En Nat Consultores nos encontramos en la búsqueda de un Desarrollador/a React para sumarse a un desafiante proyecto de desarrollo e innovación para todo el rubro financiero de Argentina.
                    </p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step bg-info p-3">
                    <i class="material-icons text-white text-sm opacity-10">
            credit_card
          </i>
                  </span>
                  <div class="timeline-content pt-1">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Busqueda community manager</h6>
                    <p class="text-secondary text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                    <p class="text-sm text-dark mt-3 mb-2">
                      ¡Estamos buscando un community manager para unirse a nuestro equipo multidisciplinar en pleno proceso de expansión!
                    </p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step bg-dark p-3">
                    <i class="material-icons text-white text-sm opacity-10">
            vpn_key
          </i>
                  </span>
                  <div class="timeline-content pt-1">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Busqueda de personal #3</h6>
                    <p class="text-secondary text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
                    <p class="text-sm text-dark mt-3 mb-2">
                      ¡Estamos buscando un Programador Junior para unirse a nuestro equipo multidisciplinar en pleno proceso de expansión!
                    </p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step bg-primary p-3">
                    <i class="material-icons text-white text-sm opacity-10">
            inventory_2
          </i>
                  </span>
                  <div class="timeline-content pt-1">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Busqueda de personal #4</h6>
                    <p class="text-secondary text-xs mt-1 mb-0">16 DEC</p>
                    <p class="text-sm text-dark mt-3 mb-2">
                      ¡Estamos buscando un Programador Junior para unirse a nuestro equipo multidisciplinar en pleno proceso de expansión!
                    </p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step bg-success p-3">
                    <i class="material-icons text-white text-sm opacity-10">
            done
          </i>
                  </span>
                  <div class="timeline-content pt-1">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Busqueda de personal #5</h6>
                    <p class="text-secondary text-xs mt-1 mb-0">15 DEC</p>
                    <p class="text-sm text-dark mt-3 mb-2">
                      ¡Estamos buscando un Programador Junior para unirse a nuestro equipo multidisciplinar en pleno proceso de expansión!
                    </p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step bg-info p-3">
                    <i class="material-icons text-white text-sm opacity-10">
            mail
          </i>
                  </span>
                  <div class="timeline-content pt-1">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Busqueda de personal #6</h6>
                    <p class="text-secondary text-xs mt-1 mb-0">14 DEC</p>
                    <p class="text-sm text-dark mt-3 mb-2">
                      ¡Estamos buscando un Programador Junior para unirse a nuestro equipo multidisciplinar en pleno proceso de expansión!
                    </p>
                  </div>
                </div>
                <div class="timeline-block">
                  <span class="timeline-step bg-dark p-3">
                    <i class="material-icons text-white text-sm opacity-10">
            sports_esports
          </i>
                  </span>
                  <div class="timeline-content pt-1">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Busqueda de personal #7</h6>
                    <p class="text-secondary text-xs mt-1 mb-0">13 DEC</p>
                    <p class="text-sm text-dark mt-3 mb-2">
                      ¡Estamos buscando un Programador Junior para unirse a nuestro equipo multidisciplinar en pleno proceso de expansión!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../../../assets/js/core/popper.min.js"></script>
  <script src="../../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
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