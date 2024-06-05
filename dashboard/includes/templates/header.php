 <!-- navbar header -->
 <div class="nav-header">
    <div class="nav-brand">
      <a href="/dev/index.php"><img src="https://s3-us-west-2.amazonaws.com/parallax-theme/assets/bradlogo2.png"></a>
    </div>
    <i class="fa fa-bars fa-3x"></i>
    <div class="header-links">
      <ul>
        
        <?php if(!$conn): ?>
            <li data-menuanchor="fourthPage"><a href="#about">Iniciar Sesion</a></li>
            <li data-menuanchor="thirdPage"><a href="#portfolio">Registrarme</a></li>
            <?php endif; ?>
                <?php if($auth): ?>
                <li data-menuanchor="secondPage"><a href="#about">Empresas</a></li>
                <li data-menuanchor="secondPage"><a href="#about">Cerrar Sesion</a></li>
                <?php endif; ?>
      </ul>
    </div>
  </div>
  <!-- end navbar header -->
