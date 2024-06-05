
<?php 
    if(!isset($_SESSION)) {
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polo Tecnológico</title>
    <link rel="stylesheet" href="/polo/build/css/app.css">
</head>
<body>
    
    <header class="header  <?php echo $inicio ? "inicio" : "" ?>" >
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/polo/index.php">
                    <h1></h1>
                </a>

                <div class="mobile-menu">
                    <img src="/polo/build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/polo/build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="/polo/nosotros.php"></a>
                        <a href="/polo/cursos.php"></a>
                        <a href="/polo/blog.php"></a>
                        
                        <?php if(!$auth): ?>
                            <a href="/polo/login.php">Iniciar </a>
                        <?php endif; ?>
                        <?php if($auth): ?>
                            <a href="/polo/admin/index.php"> </a>
                            <a href="/polo/empresas/index.php"></a>
                            <a href="/polo/cerrar-session.php"> </a>
                        <?php endif; ?>


                    </nav>
                </div>
            </div> <!--.barra-->
        </div>
        
        <?php if ($inicio) { ?>
            <h1>Polo de Ciencia y Tecnologia La Rioja</h1>
        <?php } ?> 
    </header>
