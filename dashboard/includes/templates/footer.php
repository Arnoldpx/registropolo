<?php 
    if(!isset($_SESSION)) {
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

?>
<footer class="footer seccion">
        <div class="contenedor contenedor-footer">
                    <nav class="navegacion">
                        <?php if(!$auth): ?>
                            <a href="/dev/login.php">Iniciar Sessión</a>
                        <?php endif; ?>
                        <?php if($auth): ?>
                            <a href="#">Usuario</a>
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