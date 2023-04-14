<?php

// Consiguramos en el servidor Zona Horaria de Lima
// date_default_timezone_get("America/Lima");

$destino = "kakeruzzempai@gmail.com,jorge.cywdt@gmail.com";
$titulo = "PHP1 - demo: " . date("Y-m-d h:i:s");
$contenido = "Saludos desde Lima Peru, Curso PHP1";

$x = mail($destino, $titulo, $contenido);
if ($x) {
    echo "Correo enviado con exito";
} else {
    echo "Error al enviar correo";
}