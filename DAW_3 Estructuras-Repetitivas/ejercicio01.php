<?php

# Ejercicio 01
# Recibir el número ingresado
$numeroIngresado = (int) $_POST["numeroIngresado"];

# Creación de la variable listaDeNumeros para mostrar al final en pantalla
$listaDeNumeros = "";

# Creación de la variable suma de los primeros números naturales
$suma = 0;

# Listar los N primeros números y sumarlos
for ($i = 1; $i <= $numeroIngresado; $i++):
    $listaDeNumeros .= " $i";
    $suma += $i;
endfor;

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Lista de números:</b> $listaDeNumeros</p>";
echo "<p><b>Suma total:</b> $suma</p>";
