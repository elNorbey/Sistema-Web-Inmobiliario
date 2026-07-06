<?php
/*
===================================================================
            SISTEMA WEB INMOBILIARIO CJINVERSIONES
===================================================================

Archivo:
    index.php

Descripcion:
    Punto de entrada principal del sitio web.
    Desde aqui se carga la estructura general de todas las paginas.
===================================================================

===================================================================
Desarrollador:
    Ing. Norbey Castillo

Version:
    0.1
===================================================================
*/

declare(strict_types = 1);
?>

<!DOCTYPE html>

<html lang = "es">

<?php
 
    include_once 'includes/head.php'; 
    
?>

<body>

    <?php require_once "includes/navbar.php"; ?>

    <?php require_once "pages/inicio.php"; ?>

    <?php require_once "includes/footer.php"; ?>

    <?php require_once "includes/scripts.php"; ?>

</body>

</html>