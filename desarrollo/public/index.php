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

    <script>

        const track = document.querySelector('.terreno-track');

        const btnAnterior = document.querySelector('.anterior');

        const btnSiguiente = document.querySelector('.siguiente');

        const tarjetasOriginales =
            Array.from(document.querySelectorAll('.terreno-card'));

        const espacio = 35;

        const visibles = 3;

        const movimiento =
            tarjetasOriginales[0].offsetWidth + espacio;


    /* ==================================
       CLONAR TARJETAS
    ================================== */

        const primeras = tarjetasOriginales.slice(0, visibles);

        const ultimas = tarjetasOriginales.slice(-visibles);


        primeras.forEach(tarjeta => {

            track.appendChild(tarjeta.cloneNode(true));

        });


        ultimas.reverse().forEach(tarjeta => {

            track.prepend(tarjeta.cloneNode(true));

        });


    /* ==================================
       POSICIÓN INICIAL
    ================================== */

        let indice = visibles;

        let bloqueado = false;

        let intervalo;


        track.style.transition = 'none';

        track.style.transform =
            `translateX(-${indice * movimiento}px)`;


    /* ==================================
       BOTÓN SIGUIENTE
    ================================== */

        btnSiguiente.addEventListener('click', () => {

            if(bloqueado) return;

            bloqueado = true;

            indice++;

            track.style.transition = 'transform .5s ease';

            track.style.transform =
                `translateX(-${indice * movimiento}px)`;

        });


    /* ==================================
       BOTÓN ANTERIOR
    ================================== */

        btnAnterior.addEventListener('click', () => {

            if(bloqueado) return;

            bloqueado = true;

            indice--;

            track.style.transition = 'transform .5s ease';

            track.style.transform =
                `translateX(-${indice * movimiento}px)`;

        });


    /* ==================================
       REINICIO INVISIBLE
    ================================== */

        track.addEventListener('transitionend', () => {

            if(indice >= tarjetasOriginales.length + visibles){

                track.style.transition = 'none';

                indice = visibles;

                track.style.transform =
                    `translateX(-${indice * movimiento}px)`;

            }


            if(indice < visibles){

                track.style.transition = 'none';

                indice = tarjetasOriginales.length + visibles - 1;

                track.style.transform =
                    `translateX(-${indice * movimiento}px)`;

            }


            bloqueado = false;

        });

        function iniciarCarruselAutomatico(){

            intervalo = setInterval(() => {
                btnSiguiente.click();
            }, 4000);

        }

        iniciarCarruselAutomatico();

        track.addEventListener('mouseenter', () => {

            clearInterval(intervalo);

        });

        track.addEventListener('mouseleave', () => {

            iniciarCarruselAutomatico();
            
        });

    </script>

</body>

</html>