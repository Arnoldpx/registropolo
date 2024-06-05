<?php 
    if(!isset($_SESSION)) {
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

?>
<footer class="footer seccion">
        <div class="contenedor contenedor-footer">
                    <nav class="navegacion">
                        <a href="/polo/index.php">Inicio</a>    
                        <a href="/polo/nosotros.php">Nosotros</a>
                        <a href="/polo/cursos.php">Cursos</a>
                        <a href="/polo/blog.php">Noticias</a>
                        
                        <?php if(!$auth): ?>
                            <a href="/polo/login.php">Iniciar Sessión</a>
                        <?php endif; ?>
                        <?php if($auth): ?>
                            <a href="/polo/empresas/index.php">Empresas</a>
                        <?php endif; ?>


                    </nav>
                </div>
            </div> <!--.barra-->
        </div>

        <p class="copyright">Todos los derechos Reservados 2023 &copy;</p>
    </footer>
        
        <script src="/build/js/bundle.min.js" > </script>
    </body>
    </html>