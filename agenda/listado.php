<?php

$archivo = "agenda.txt";

if (file_exists($archivo)) {
    // abrimos archivo
    $f = fopen($archivo, "r");

    // leemos contenido del archivo, fgets lee una linea y luego salta a la siguiente para leer todas las lineas
    while (!feof($f)) {
        $leido = fgets($f);
        $lineas[] = explode("|", $leido);
    }
    fclose($f);

    // borramos el ultimo elemento del array porque esta vacio
    unset($lineas[count($lineas)-1]);
    $itm = 0;
} else {
    $lineas = array();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrados</title>
</head>

<body>
    <a href="agenda_nuevo.html">Nuevo registro</a>
    <br>
    <table border=1>
        <tr>
            <td>id</td>
            <td>Apellidos</td>
            <td>Nombres</td>
            <td>Nombres</td>
        </tr>
        <?php foreach($lineas as $value) { ?>
            <tr>
                <td><?= ++$itm ?></td>
                <td><?= $value[0] ?></td>
                <td><?= $value[1] ?></td>
                <td><?= $value[2] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>