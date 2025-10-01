<?php

# Recibir el número ingresado
$numeroIngresado = (int) $_POST["numeroIngresado"];

# Creación de la variable lista para los números impares
$listaDeNumerosImpares = "";

# Creación de la variable suma para la suma de los N primeros números impares
$suma = 0;

# Listar los N primeros números impares y sumarlos
for ($i = 1; $i <= $numeroIngresado; $i++):
    $impar = $i * 2 - 1;
    $listaDeNumerosImpares .= " $impar";
    $suma += $impar;
endfor;

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Lista de números impares:</b> $listaDeNumerosImpares</p>";
echo "<p><b>Suma:</b> $suma</p>";
