<?php

# Archivo contador de recargas
$archivo="contador.txt";

# Existe el archivo?
if(file_exists($archivo)){
    # Existe
    $f=fopen($archivo,"r+");
    $valor=fgets($f);
    $valor=$valor+1;
    rewind($f);
}else{
    # No existe
    $f=fopen($archivo,"w+");
    $valor=1;
}

// strlen => indica la cantidad de caracteres de una cadena
fwrite($f,$valor,strlen($valor));
fclose($f);

echo "Recarga de página: $valor ";