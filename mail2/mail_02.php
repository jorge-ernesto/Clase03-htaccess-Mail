<?php

// Correo en formato HTML
$destino=$_POST['txtDestino'];
$titulo=$_POST['txtTitulo'];
$mensaje=$_POST['txtMensaje'];

$cabecera="Content-Type: text/html; charset=\"utf8\"\n";

//$color='orange';
//$color='red';
$color='pink';

// heredoc o documento inscrustado
$contenido=<<<PERU
<html>
<head>

</head>
<body>
<div style="background:$color; height: 200px; width:500px;  border:solid 1px;">
<font face="Arial" size="6">$mensaje</font>
<br>
<a href="https://www.peru.com">Te esperamos</a>
</div>
</body>
</html>
PERU;

$x=mail($destino, $titulo, $contenido, $cabecera);

if ($x==1) {
    echo "Mensaje enviado: " . date('Y-m-d h:i:s');
} else {
    echo "Error al enviar: " . date('Y-m-d h:i:s');
}
echo "<br/>";
echo "<a href=mail_01.php>Regresar</a>";