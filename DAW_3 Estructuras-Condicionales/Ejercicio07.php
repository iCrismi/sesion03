<?php
$DNI = $_POST['DNI'];
$letras = "TRWAGMYFPDXBNJZSQVHLCKE";
$indice = $DNI % 23;
$letra = $letras[$indice];
echo "El NIF correspondiente al DNI $DNI es: $letra";
?>
