<?php

# EJercicio 02
# Recibir el número ingresado
$numeroIngresado = (int) $_POST["numeroIngresado"];

# Creación de la variable lista para los números pares
$listaDeNumerosPares = "";

# Creación de la variable suma para la suma de los primeros N números impares
$suma = 0;

# Listar los primeros N números pares y sumarlos
for ($i = 1; $i <= $numeroIngresado; $i++):
    $par = $i * 2;
    $listaDeNumerosPares .= " $par";
    $suma += $par;
endfor;

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Lista de números pares:</b> $listaDeNumerosPares</p>";
echo "<p><b>Suma:</b> $suma</p>";
