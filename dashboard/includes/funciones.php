<?php
require "app.php";

function incluirTemplate( string $nombre, bool $inicio = false ) {
    include TEMPLATES_URL . "/${nombre}.php";
}

function estaAutenticado(): bool {
    session_start();
    
    if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
        return true;
    }
    return false;
}
