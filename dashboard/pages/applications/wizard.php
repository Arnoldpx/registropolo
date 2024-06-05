<!--
=========================================================
* Material Dashboard 2 PRO - v3.0.6
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-dashboard-pro 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/polo/assets/img/PoloTecLogo.png">
  <title>
    PoloTecnologíco
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
</head>

<body class="g-sidenav-show  bg-gray-200">

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12 text-center">
          <h3 class="mt-5">Registro de Ciencia y conocimiento</h3>
          <h5 class="font-weight-normal opacity-6">Complete los campos con su informacion personal</h5>
          <!--progress bar-->
          <div class="multisteps-form mb-5">
            
            <div class="row">
              <div class="col-12 col-lg-8 mx-auto my-5">
                <div class="card">
                  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                      <div class="multisteps-form__progress">
                        <button class="multisteps-form__progress-btn js-active" type="button" title="Informacion del usuario">
                          <span>Principal</span>
                        </button>
                        <button class="multisteps-form__progress-btn" type="button" title="Rol">
                          <span>Elija su Rol</span>
                        </button>
                        <button class="multisteps-form__progress-btn" type="button" title="Ubicacion">
                          <span>Ultimo Paso!</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <form class="multisteps-form__form">
                      <!--single form panel-->
                      <div class="multisteps-form__panel" data-animation="FadeIn">
                        <div class="row text-center mt-4">
                          <div class="col-10 mx-auto">
                            <h5 class="font-weight-normal">Cual sera su rol dentro de nuestro ecosistema</h5>
                          </div>
                        </div>
                        <div class="multisteps-form__content">
                          <div class="row mt-4">
                            <div class="col-sm-3 ms-auto">
                              <input type="checkbox" class="btn-check" id="btncheck1">
                              <label class="btn btn-lg btn-outline-primary opacity-7 border-2 px-6 py-5" for="btncheck1">
                                <i class="material-icons">
                            person_add
                          </i>
                              </label>
                              <h6>Usuario</h6>
                            </div>
                            <div class="col-sm-3 me-auto">
                              <input type="checkbox" class="btn-check" id="btncheck2">
                              <label class="btn btn-lg btn-outline-primary opacity-7 border-2 px-6 py-5" for="btncheck2">
                                <i class="material-icons">
                                  work
                          </i>
                              </label>
                              <h6>Empresa</h6>
                            </div>
                        
                          </div>
                          <div class="button-row d-flex mt-4">
                            <button class="btn btn-outline-dark mb-0 js-btn-prev" type="button" title="Prev">Volver</button>
                            <button class="btn bg-gradient-primary ms-auto mb-0 js-btn-next" type="button" title="Next">Siguiente</button>
                          </div>
                        </div>
                      </div>
                      <!--single form panel-->
                      <div class="multisteps-form__panel js-active" data-animation="FadeIn">
                        <div class="row text-center mt-4">
                          <div class="col-10 mx-auto">
                            <h5 class="font-weight-normal">Creando su cuenta de usuario</h5>
                            <p>Comple con la informacion correspodiente los siguientes campos.</p>
                          </div>
                        </div>
                        <div class="multisteps-form__content">
                          <div class="row mt-3">
                            <div class="col-12 col-sm-4">
                              <div class="avatar avatar-xxl position-relative">
                                <img src="../../assets/img/PoloTecLogo.png" class="border-radius-md" alt="team-2">
                                <a href="javascript:;" class="btn btn-sm btn-icon-only bg-gradient-primary position-absolute bottom-0 end-0 mb-n2 me-n2">
                                  <span class="material-icons text-xs top-0 mt-n2" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Edit Image" aria-label="Edit Image">
                                    edit
                                  </span>
                                </a>
                              </div>
                            </div>
                            <div class="col-12 col-sm-8 mt-4 mt-sm-0 text-start">
                              <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label">Direcion de E-mail</label>
                                <input type="text" class="form-control multisteps-form__input">
                              </div>
                              <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label">Contraseña</label>
                                <input type="password" class="form-control multisteps-form__input">
                              </div>
                              <div class="input-group input-group-dynamic">
                                <label class="form-label">Repetir Contraseña</label>
                                <input type="password" class="form-control multisteps-form__input">
                              </div>
                            </div>
                          </div>
                          <div class="button-row d-flex mt-4">
                            <a href="/polo/index.php"><button class="btn btn-outline-dark mb-0 js-btn-prev" type="button" title="inicio">Volver al Inicio.</button></a>
                            <button class="btn bg-gradient-primary ms-auto mb-0 js-btn-next" type="button" title="Next">Siguiente</button>
                          </div>
                        </div>
                      </div>
                      
                      <!--single form panel-->
                      <div class="multisteps-form__panel" data-animation="FadeIn">
                        <div class="row text-center mt-4">
                          <div class="col-10 mx-auto">
                            <h5 class="font-weight-normal">Informacion Complementaria</h5>
                            
                          </div>
                        </div>
                        <div class="multisteps-form__content">
                          <div class="row text-start">
                      
                            <div class="col-12 col-md-7 mt-3">
                              <div class="input-group input-group-static">
                                <label>Localidad</label>
                                <input class="multisteps-form__input form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-12 col-md-5 ms-auto mt-3 text-start">
                              <div>
                                <label class="form-label mb-0 ms-0">Lugar de Residencia
                                </label>
                                <select class="form-control" name="choices-country" id="choices-country">
                                    <option value="" disabled selected>Lugar de Residencia Actual</option>
                                    <option value="1">La Rioja</option>
                                    <option value="2">Buenos Aires</option>
                                    <option value="3">Catamarca</option>
                                    <option value="4">Chaco</option>
                                    <option value="5">Chubut</option>
                                    <option value="6">Córdoba</option>
                                    <option value="7">Corrientes</option>
                                    <option value="8">Entre Ríos</option>
                                    <option value="9">Formosa</option>
                                    <option value="10">Jujuy</option>
                                    <option value="11">La Pampa</option>
                                    <option value="12">Mendoza</option>
                                    <option value="13">Misiones</option>
                                    <option value="14">Neuquén</option>
                                    <option value="15">Río Negro</option>
                                    <option value="16">Salta</option>
                                    <option value="17">San Juan</option>
                                    <option value="18">San Luis</option>
                                    <option value="19">Santa Cruz</option>
                                    <option value="20">Santa Fe</option>
                                    <option value="21">Santiago del Estero</option>
                                    <option value="22">Tierra del Fuego, Antártida e Islas del Atlántico Sur</option>
                                    <option value="23">Tucumán</option>
                                    <option value="24">Reside en el Extranjero</option>
                                  </select>
                              </div>
                            </div>

                            <div class="row mt-3">
                              <div class="col-12 col-sm-6">
                                <div class="input-group input-group-dynamic">
                                  <label class="form-label">Nombre de la empresa (nombre de fantasia si lo tiene)</label>
                                  <input class="multisteps-form__input form-control" type="text" />
                                </div>
                              </div>
                              <div class="col-4 col-sm-4 mt-3 mt-sm-0">
                                <div class="input-group input-group-dynamic">
                                  <label class="form-label">Rubro</label>
                                  <input class="multisteps-form__input form-control" type="text" />
                                </div>
                              </div>
                              <div class="col-4 col-sm-2 mt-3 mt-sm-0">
                                <div class="input-group input-group-dynamic">
                                  <label class="form-label">Teléfono</label>
                                  <input class="multisteps-form__input form-control" type="text" />
                                </div>
                              </div>
                            </div>

                            <div class="row mt-3">
                              <div class="col-12 col-sm-6">
                                <div class="input-group input-group-dynamic">
                                  <label class="form-label">Dato 1</label>
                                  <input class="multisteps-form__input form-control" type="text" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="input-group input-group-dynamic">
                                  <label class="form-label">Dato 2</label>
                                  <input class="multisteps-form__input form-control" type="text" />
                                </div>
                              </div>
                            </div>
                          </div>

                            <div class="row mt-3">
                              <div class="col-12 col-sm-6">
                                <div class="input-group input-group-dynamic">
                                  <label class="form-label">¿Poque quiere asociarse?</label>
                                  <input class="multisteps-form__input form-control" type="text" />
                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="input-group input-group-dynamic">
                                  <label class="form-label">¿Como nos conocieron?</label>
                                  <input class="multisteps-form__input form-control" type="text" />
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="row">
                            <div class="button-row d-flex mt-4 col-12">
                              <button class="btn btn-outline-dark mb-0 js-btn-prev" type="button" title="Prev">Volver</button>
                              <button class="btn bg-gradient-primary ms-auto mb-0" type="button" title="Send">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
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
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
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
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Sidenav Mini</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Buy now</a>
        <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard">Free demo</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20PRO%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Kanban scripts -->
  <script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
  <script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
  <script src="../../assets/js/plugins/multistep-form.js"></script>
  <script src="../../assets/js/plugins/choices.min.js"></script>
  <script>
    if (document.getElementById('choices-country')) {
      var country = document.getElementById('choices-country');
      const example = new Choices(country);
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
  <script src="../../assets/js/material-dashboard.min.js?v=3.0.6"></script>
</body>

</html>