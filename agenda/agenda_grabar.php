<?php

$a = $_POST['txtApellidos'];
$b = $_POST['txtNombres'];
$c = $_POST['txtCorreo'];

// Saludos
// se juntan los campos y ademas el salto de linea
$fila = "$a|$b|$c" . PHP_EOL;

// nombre del archivo donde guardaremos la info
$archivo = "agenda.txt";

$f = fopen($archivo, "a+");
$w = fwrite($f, $fila);
if ($w == false) {
    echo "Error al grabar";
}
fclose($f);

// redireccionamos, regresamos a agenda
header('location: listado.php');