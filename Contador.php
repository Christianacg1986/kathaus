<?php
// Archivo PHP: contador.php

// Leer el archivo contador.txt
$archivo = 'contador.txt';
$contador = file_get_contents($archivo);

// Incrementar el contador
$contador++;

// Guardar el nuevo valor en el archivo
file_put_contents($archivo, $contador);

// Devolver el valor del contador
echo $contador;
?>
