<?php
    // Importar coneccion bd
    require  'includes/config/database.php';
    $db = conectarDB();

    $errores = [];
    $email = '';
    $password = '';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        if (empty($email) || empty($password)) {
            $errores[] = "El email y la contraseña son obligatorios";
        } else {
            $query = "SELECT * FROM usuario WHERE email = :email";
            $statement = $db->prepare($query);
            $statement->bindParam(':email', $email);
            $statement->execute();
            $usuario = $statement->fetch(PDO::FETCH_ASSOC);
    
            if ($usuario) {
                if (password_verify($password, $usuario['password'])) {
                  
                    $_SESSION['nivel_privilegio'] = $usuario['nivel_privilegio'];
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;
                    header('Location: ./dashboard/index.php');
                    exit;
                } else {
                    $errores[] = "La contraseña ingresada es incorrecta";
                }
            } else {
                $errores[] = "El usuario no existe";
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
  <title>
    Registro Economía del Conocimiento
  </title>
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
  <link id="pagestyle" href="./assets/css/material-kit-pro.css?v=3.0.3" rel="stylesheet" />
</head>

<body class="presentation-page bg-gray-200">
<!-- Navbar-->
<nav class="navbar navbar-expand-lg blur blur-rounded position-absolute my-3 top-0 border-bottom py-3 z-index-3 shadow my-3 py-2 start-0 end-0 mx-4">
  <div class="container">
    <a class="navbar-brand text-gradient text-dark" href="javascript:;"><h5>Polo Tecnológico</h5></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header-2" aria-controls="navbar-header-2" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-header-2">
      <ul class="navbar-nav mx-auto">
      <a href="/polo/index.php" target="_blank">
      <!-- <span class="ms-1 font-weight-bold text-white">Registro Economía del Conocimiento</span> -->
      </a>
      <a href="/registro/cerrar-session.php" target="_blank">
      <span class="ms-1 font-weight-bold text-white">Cerrar Session</span>
      </a>
      </ul>

      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-gradient text-info" href="https://twitter.com/PoloTecLR">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gradient text-info mx-2" href="https://www.facebook.com/profile.php?id=100083851852563">
            <i class="fab fa-facebook"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gradient text-info" href="https://www.instagram.com/polotecnologicolr/">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->


<!-- -------- START HEADER 8 w/ two background colors ------- -->
<header class="header-rounded-images">
  <div class="page-header min-vh-90">
    <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0 border-bottom-end-radius-0" src=".\assets\img\inicio2.jpg" alt="image" loading="lazy">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-flex">
          <div class="card card-body blur text-md-start text-center px-sm-5 shadow-lg mt-sm-5 py-sm-5">
            <h2 class="text-dark mb-4">Registro Economía del Conocimiento</h2>

            <p class="lead text-dark pe-md-5 me-md-5">
            Llena el formulario, completa el registro y comenzarás a vivir tu futuro. Nuestro objetivo es incrementar tus oportunidades laborales, acompañarte con capacitaciones 100% gratis y hacer tus logros y habilidades visibles en bootcamps o búsquedas laborales en las empresas líderes de base tecnológica asociadas al PoloTecnológico La Rioja.
            </p>
            <div class="buttons">
              <button type="button" class="btn bg-gradient-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModalForm ">Iniciar Sesion</button>
              <a href="pages/sign-up/registro.php"><button type="button" class="btn btn-outline-secondary mt-4 ms-2">Regristrarse</button></a>
              
 

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

               <!-- Modal -->
      <div class="modal fade" id="exampleModalForm" tabindex="-1" aria-labelledby="exampleModalForm" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="card bg-gray-200 shadow border-0 mb-0">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-info border-radius-lg py-3 pe-1 text-center py-4">
                    <h4 class="font-weight-bolder text-white mt-1 mb-0">Bienvenido</h4>
                    <p class="mb-1 text-sm text-white">Complete los campos con su informacion</p>
                  </div>
                </div>
                <div class="card-body">
                  <form role="form text-start" method="POST">
                  <?php if (!empty($errores)): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach($errores as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="input-group input-group-static mb-4">
        <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control" placeholder="correo@example.com" id="email"required>
    </div>

    <div class="input-group input-group-static mb-4">
        <label for="password">Contraseña</label>
        <input type="password" name="password" class="password" id="password" placeholder="•••••••••••••" required>
    </div>

    <div class="form-check form-switch d-flex align-items-center">
        <input class="form-check-input" type="checkbox" id="rememberMe" checked>
        <label class="form-check-label mb-0 ms-3" for="rememberMe">Recordarme</label>
    </div>

    <div class="text-center">
        <button type="submit" class="btn bg-gradient-primary mt-4 mb-0">Iniciar sesión</button>
    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0">
                  <p class="mb-4 text-sm mx-auto">
                    No tienes una cuenta ?
                    <a href="pages/sign-up/registro.php" class="text-primary text-gradient font-weight-bold">¡Registrarte Ahora!</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


</header>

<!-- END HEADER -->
  <!-- container -->
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <!-- Contador -->
    <section class="pt-3 pb-4" id="count-stats">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 z-index-2 border-radius-xl mx-auto py-3">
            <div class="row">
              <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-primary"><span id="state1" countTo="4692">0</span>+</h1>
                  <h5 class="mt-3">Registro RR.HH</h5>
                  <p class="text-sm font-weight-normal">Registro de Recursos Humanos de Economía del Conocimiento.</p>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-4 position-relative">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-primary"><span id="state2" countTo="13">0</span>+</h1>
                  <h5 class="mt-3">Empresas</h5>
                  <p class="text-sm font-weight-normal">Trabajamos activamente con Empresas que confian en nuestro trabajo.</p>
                </div>
                <hr class="vertical dark">
              </div>
              <div class="col-md-4">
                <div class="p-3 text-center">
                  <h1 class="text-gradient text-primary"><span id="state3" countTo="500">0</span>+</h1>
                  <h5 class="mt-3">Puestos de Trabajo</h5>
                  <p class="text-sm font-weight-normal">Gracias a nuestra comunidad pudimos generar nuevos puestos de trabajo.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END contador -->
    <!-- incio fuateres Card -->

    <section class="my-5 py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
            <div class="rotating-card-container">
              <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
                <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                  <div class="card-body py-7 text-center">
                    <i class="material-icons text-white text-4xl my-3">touch_app</i>
                    <h3 class="text-white">Estas a un click de <br /> ¡Comenzar un cambio!</h3>
                    <p class="text-white opacity-8">Unite a la comunidad del Polo Tecnológico y comenza a disfrutar de los beneficios</p>
                  </div>
                </div>
                <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                  <div class="card-body pt-7 text-center">
                    <h3 class="text-white">Unite a Nuestra comunidad</h3>
                    <p class="text-white opacity-8">Creamos un ecosistema confiable, para poder crecer junto a ustedes.</p>
                    <a href="pages/sign-up/registro.php" target="_blank" class="btn btn-dark btn-sm w-50 mx-auto mt-3">¡Comenza a ser parte!</a>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 ms-auto">
            <div class="row">
              <div class="col-8">
                <div class="p-3 text-start border-radius-lg">
                  <h2 class="mt-5">Forma parte de la Bolsa de Trabajo Digital del Polo Tecnológico!</h2>
                  <p class="text-dark text-lg mt-3">
                    <span class="font-weight-bold">Polo Tecnológico La Rioja,</span>
                    está trabajando de forma activa para poder brindar soluciones y generar nuevos vínculos. Es por ello que desarrollamos un lugar donde tanto empresas como talentos especializados pueden formar un vínculo para poder generar proyectos de desarrollo.</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-4 col-md-4 py-3">
                <div class="p-3 text-start">
                  <i class="material-icons text-4xl text-gradient text-primary">diversity_3</i>
                  <h5 class="mt-3">Unite a Nuestra comunidad!</h5>
                  <p>Juntamos la innovación, nuevas habilidades tecnológicas y conocimiento de la industria para ayudar a los clientes a innovar a escala, transformar y hacer crecer sus negocios.</p>
                </div>
              </div>
              <div class="col-xl-4 col-md-4 py-3">
                <div class="p-3 text-start">
                  <i class="material-icons text-4xl text-gradient text-primary">school</i>
                  <h5 class="mt-3">Te Ayudamos a capacitarte!</h5>
                  <p>Somos un ente gubernamental en la que valoramos el desarrollo personal, es por eso que ofrecemos cursos de capacitación para nuestros afiliados.</p>
                </div>
              </div>
              <div class="col-xl-4 col-md-4 py-3">
                <div class="p-3 text-start">
                  <i class="material-icons text-4xl text-gradient text-primary">emoji_people</i>
                  <h5 class="mt-3">¿Busca nuevos retos?</h5>
                  <p>La Bolsa de Trabajo del Polo Tecnológico ofrece excelentes oportunidades profesionales para personal especializado.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END features Card -->
  
    <!-- START Blogs w/ 3 images & quote & text -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 ms-auto me-auto text-center">
            <h2 class="text-gradient text-dark">¡Creando el Futuro!</h2>
            <p>
              Junto a nuestras Autoridades referentes de Economia del Conocimiento. 
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END Blogs w/ 3 images & quote & text -->


    <!-- inicio Team -->
    <section class="bg-gradient-dark position-relative overflow-hidden">
      <img src="../assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute opacity-6">
      <div class="position-absolute w-100 z-inde-1 top-0 mt-n3">
        <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>wave-down</title>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g fill="#FFFFFF" fill-rule="nonzero">
              <g id="wave-down">
                <path d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z" id="Path-Copy-2" transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) "></path>
              </g>
            </g>
          </g>
        </svg>
      </div>
      <div class="container py-lg-10 py-7">
        <div class="row mt-5">
          <div class="col-lg-3 col-6 mb-lg-0 mb-4">
            <div class="card shadow-lg">
              <div class="card-header mt-n4 mx-3 p-0 bg-transparent position-relative z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="./assets/img/ricardo_quintela.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center bg-white border-radius-lg p-3 pt-0">
                <h5 class="mt-3 mb-1 d-md-block d-none">Ricardo Quintela</h5>
                <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">Ricardo Clemente Quintela</p>
                <p class="mb-0 text-xs font-weight-bolder text-dark text-gradient text-uppercase">Gobernador de la Provincia de La Rioja</p>
              </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-6 mb-lg-0 mb-4">
            <div class="card shadow-lg">
              <div class="card-header mt-n4 mx-3 p-0 bg-transparent position-relative z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="./assets/img/federico_bazan.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center bg-white border-radius-lg p-3 pt-0">
                <h5 class="mt-3 mb-1 d-md-block d-none">Federico Bazán</h5>
                <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">Federico Bazán</p>
                <p class="mb-0 text-xs font-weight-bolder text-dark text-gradient text-uppercase">Ministro de Trabajo, Empleo e Industria</p>
              </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-6 mb-lg-0 mb-4">
            <div class="card shadow-lg">
              <div class="card-header mt-n4 mx-3 p-0 bg-transparent position-relative z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="./assets/img/hugo_vera.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center bg-white border-radius-lg p-3 pt-0">
                <h5 class="mt-3 mb-1 d-md-block d-none">Hugo Vera</h5>
                <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">Hugo Vera</p>
                <p class="mb-0 text-xs font-weight-bolder text-dark text-gradient text-uppercase">Secretario de Ciencia y Tecnología</p>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-6 mb-lg-0 mb-4">
            <div class="card shadow-lg">
              <div class="card-header mt-n4 mx-3 p-0 bg-transparent position-relative z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="./assets/img/cristian_oliva.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
              </div>
              <div class="card-body text-center bg-white border-radius-lg p-3 pt-0">
                <h5 class="mt-3 mb-1 d-md-block d-none">Cristian Oliva</h5>
                <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">Cristian Oliva</p>
                <p class="mb-0 text-xs font-weight-bolder text-dark text-gradient text-uppercase">Director Gral. de Economía del Conocimiento</p>
              </div>
            </div> 
          </div>
    
        
        </div>
      </div>
      <div class="position-absolute w-100 bottom-0">
        <svg width="100%" viewBox="0 -1 1920 166" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>wave-up</title>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(0.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <g id="wave-up" transform="translate(0.000000, -5.000000)">
                <path d="M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z"></path>
              </g>
            </g>
          </g>
        </svg>
      </div>
    </section>
    <!-- END team -->
    
    <!-- incio contacto -->
    <section class="py-7">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card overflow-hidden">
              <div class="row">
                <div class="col-lg-7">
                  <form class="p-3" id="contact-form" method="post">
                    <div class="card-header px-4 py-sm-5 py-3">
                      <h2>¿ Como podemos Ayudarte ?</h2>
                      <p class="lead"> No importa de qué se trate, ¡estamos aquí para ayudarte! <br>¡Envía tu consulta! Nuestro equipo, te respondera tan rapido como sea posible.</p>
                    </div>
                    <div class="card-body pt-1">
                        <div class="row">
                          <div class="col-md-12 pe-2 mb-3">
                            <div class="input-group input-group-static">
                              <label>Su Nombre:</label>
                              <input class="form-control" placeholder="Nombre Completo" type="text" >
                            </div>
                          </div>
    
                          <div class="col-md-12 pe-2 mb-3">
                            <div class="input-group input-group-static">
                              <label>Asunto:</label>
                              <input class="form-control" placeholder="Su Asunto" type="text" >
                            </div>
                          </div>
    
                          <div class="col-md-12 pe-2 mb-3">
                            <div class="input-group input-group-static mb-0">
                                <label>Ingrese su Consulta:</label>
                                <textarea name="message" class="form-control" id="message" rows="6" placeholder="Me comunico para..."></textarea>
                            </div>
                          </div>
                        </div>
    
                        <div class="row">
                          <div class="col-md-6 text-end ms-auto">
                              <button type="submit" class="btn btn-primary bg-gradient-primary mb-0">Enviar Consulta</button>
                          </div>
                        </div>
                    </div>
                  </form>
                </div>
                <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url(&#39;../../assets/img/examples/blog4.jpg&#39;)">
                  <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                    <div class="mask bg-gradient-primary opacity-9"></div>
                    <div class="p-5 position-relative text-start my-auto">
                      <h3 class="text-white">Ponete en contacto con nosotros</h3>
                      <p class="text-white opacity-8 mb-4">¡Estamos aquí para ayudarte! <br>Utiliza nuestros canales de comunicación para llegar a nosotros.</p>
                      <div class="d-flex p-2 text-white">
                        <i class="material-icons text-sm">email</i>
                        <span class="text-sm opacity-8 ps-3">info@polotec.ar</span>
                      </div>
                      <div class="d-flex p-2 text-white">
                        <i class="material-icons text-sm">location_on</i>
                        <span class="text-sm opacity-8 ps-3"> Santa Fé y Copiapo, Ciudad de La Rioja</span>
                      </div>
                      <div>
                      <a href="https://www.facebook.com/profile.php?id=100083851852563" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Facebook">
                          <i class="fab fa-facebook"></i>
                      </a>

                        <a href="https://twitter.com/PoloTecLR" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Twitter">
                          <i class="fab fa-twitter"></i>
                        </a>

                        <a href="https://www.instagram.com/polotecnologicolr/" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Instagram">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </div>
                      <!--
                      <div class="mt-4">
                        <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Facebook" href="https://www.facebook.com/profile.php?id=100083851852563">
                          <i class="fab fa-facebook"></i>
                        </button>
                        <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Twitter" href="https://twitter.com/PoloTecLR">
                          <i class="fab fa-twitter"></i>
                        </button>
                        <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Instagram" href="https://www.instagram.com/polotecnologicolr/">
                          <i class="fab fa-instagram"></i>
                        </button>
                      </div> -->
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 <!-- END contacto -->

 <section class="py-4 mb-6">
  <div class="container">
    <div class="row my-5">
      <div class="col-md-8 mx-auto text-center">
        <h2>¿ Tenes alguna Duda ?</h2>
        <p> En este panel encontraras algunas de las preguntas que nos realizan nuestros usuarios. </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="accordion" id="accordionRental">
          <div class="accordion-item mb-3">
            <h5 class="accordion-header" id="headingOne">
              <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                ¿Quiénes somos?
                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
              </button>
            </h5>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionRental">
              <div class="accordion-body text-sm opacity-8">
              El Polo Tecnológico es una entidad autárquica que trabaja de manera articulada con el Ministerio de Trabajo Empleo e Industria y con la secretaría de ciencia y tecnología, promoviendo el desarrollo de la economía del conocimiento en la región, fomentando la innovación, el emprendimiento, impulsando la diversificación de la matriz productiva y la creación de empleo de alta calidad.
              </div>
            </div>
          </div>
          <div class="accordion-item mb-3">
            <h5 class="accordion-header" id="headingTwo">
              <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                ¿Puedo aplicar desde cualquier parte del mundo?
                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
              </button>
            </h5>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
              <div class="accordion-body text-sm opacity-8">
              Es la Herramienta del Polo Tecnológico La Rioja, para fortalecer el networking de la economía del conocimiento de la provincia a los fines de fortalecer la conexión del talento riojano con las empresas en alianza con el Polo, además quienes quieran fortalecer sus habilidades digitales y formarse en tecnología, mediante este registro gozarán de las novedad del “Programa de Formación con Empleabilidad”. 
              </div>
            </div>
          </div>
          <div class="accordion-item mb-3">
            <h5 class="accordion-header" id="headingThree">
              <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                ¿Cuales son las posiciones laborales a las que puedo aplicar?
                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
              </button>
            </h5>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionRental">
              <div class="accordion-body text-sm opacity-8">
              MERN STACK, Cloud Computing, Metodologías ágiles, Data analytics, Marketing Digital, Diseño UX/UI, Introducción a la programación, Front End, Back End, QA automation, Community management, Digital product management,  E-mail marketing, Salesforce y más…
              </div>
            </div>
          </div>
          <div class="accordion-item mb-3">
            <h5 class="accordion-header" id="headingFour">
              <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Otras Consultas
                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
              </button>
            </h5>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionRental">
              <div class="accordion-body text-sm opacity-8">
              No importa de qué se trate, ¡estamos aquí para ayudarte!
              ¡Envía tu consulta! Nuestro equipo, te respondera tan rapido como sea posible.
              Para más información envíanos un mensaje al siguiente mail: info@polotec.ar.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
   
    <!-- Nuestros colavoradores -->
<div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-8 mx-auto text-center">
        <h6 class="opacity-5">¡Estamos construyendo el Futuro y estas empresas nos ayudan a hacerlo!</h6>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-2 col-md-4 col-6 mb-4">
        <img class="w-100 opacity-9" src="assets/img/materiad-logo.png" alt="logo">
      </div>
      <div class="col-lg-2 col-md-4 col-6 mb-4">
        <img class="w-100 opacity-9" src="assets/img/epidata-logo.png" alt="logo">
      </div>
      <div class="col-lg-2 col-md-4 col-6 mb-4">
        <img class="w-100 opacity-9" src="assets/img/banco-rioja.svg" alt="logo">
      </div>
      <div class="col-lg-2 col-md-4 col-6 mb-4">
        <img class="w-100 opacity-9" src="assets/img/incluit.svg" alt="logo">
      </div>
      <div class="col-lg-2 col-md-4 col-6 mb-4">
        <img class="w-100 opacity-9" src="assets/img/logo-tsoft.png" alt="logo">
      </div>
      <div class="col-lg-2 col-md-4 col-6 mb-4">
        <img class="w-100 opacity-9" src="assets/img/practia-logo.svg" alt="logo">
      </div>
    </div>
  </div>
</div>
<!-- END Nuestros colavoradores -->



<!-- --- START FOOTER --- -->
<footer class="footer py-7 position-relative bg-gradient-dark overflow-hidden">
  <div class="position-absolute w-100 z-inde-1 top-0 mt-n3">
    <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>wave-down</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g fill="#FFFFFF" fill-rule="nonzero">
                <g id="wave-down">
                    <path d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z" id="Path-Copy-2" transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) "></path>
                </g>
            </g>
        </g>
    </svg>
  </div>
   <!-- <div class="container position-relative mt-8">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
       
             <div class="mt-4">
               <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook" href="https://www.facebook.com/profile.php?id=100083851852563">
                 <i class="fab fa-facebook"></i>
               </button>
               <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Twitter" href="https://twitter.com/PoloTecLR">
                 <i class="fab fa-twitter"></i>
               </button>
               <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram" href="https://www.instagram.com/polotecnologicolr/">
                 <i class="fab fa-instagram"></i>
               </button>
              </div>
        </div>
      </div>
     
      </div>
    -->
    
          <div class="moove-container-fluid footer-columns">
                <div class="row">

                <div class="col-lg-4 mx-auto text-center mt-7 ">
                <h6 class="footer-title text-gray 400">Seguinos</h6>
       
       <div class="mt-4">
         <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log" href="https://www.facebook.com/profile.php?id=100083851852563">
           <i class="fab fa-facebook"></i>
         </button>
         <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log" href="https://twitter.com/PoloTecLR">
           <i class="fab fa-twitter"></i>
         </button>
         <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log" href="https://www.instagram.com/polotecnologicolr/">
           <i class="fab fa-instagram"></i>
         </button>
        </div>
  </div>
                   

                    <div class="col-md-4 column-left text-center">
                        <h5 class="footer-title">Ubicación</h5>
                        <div class="text-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d669.9721293208788!2d-66.85961219495272!3d-29.417539898847338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9427db1f846d786f%3A0x189b9f0f8f45ea1b!2sPolo%20Tecnologico!5e0!3m2!1ses!2sar!4v1675255949895!5m2!1ses!2sar" width="auto" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
                        </div>
                    </div>
        
                    <div class="col-md-4 column-right">
                        <div class="text-center">
                            <img style=" max-width: 250px; max-height: 250px;" src="/campus/imagenes/Logo_Polo.png" alt="logo"></img>
                        </div>
                    </div>

                </div>


                <div class="row mt-5 mb-5">
                    <div class="col-md-3 column-center">
                        <img src="//polotec.ar/campus/imagenes/provincia_q_late.png" alt="" class="w-75">
                    </div>
                    <div class="col-md-3 column-center">
                        <img src="//polotec.ar/campus/imagenes/ciencia_y_tec.png" alt="" class="w-75">
                    </div>
                    <div class="col-md-3 column-center">
                        <img src="//polotec.ar/campus/imagenes/ministerio.png" alt="" class="w-75">
                    </div>
                    <div class="col-md-3 column-center">
                        <img src="https://polotec.ar/campus/imagenes/rioja.png" alt="" class="w-75">
                    </div>
                </div>
            </div>
        
            <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-white">
                 - Desarrollado por : Dirección General de Economia del Conocimiento - <script>document.write(new Date().getFullYear())</script> -
            </p>
        </div>

        </div>
        
</footer>
<!-- --- END FOOTER --- -->
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/mattboldt/typed.js/ -->
  <script src="./assets/js/plugins/typedjs.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="./assets/js/plugins/countup.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
  <script src="./assets/js/plugins/rellax.min.js"></script>
  <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
  <script src="./assets/js/plugins/tilt.min.js"></script>
  <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
  <script src="./assets/js/plugins/choices.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="./assets/js/plugins/parallax.min.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the blob animation -->
  <script src="./assets/js/plugins/anime.min.js" type="text/javascript"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="./assets/js/material-kit-pro.min.js?v=3.0.3" type="text/javascript"></script>
  <script type="text/javascript">
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }
  </script>
</body>

</html>