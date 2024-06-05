<?php

function conectarDB(): PDO {
    session_start();
    $dsn = 'mysql:host=128.201.239.5;dbname=registro';
    $username = 'admin';
    $password = 'Polo_2021';

    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo "Error al conectar a la base de datos: " . $e->getMessage();
        exit;
    }
}
?>