<?php

# EJercicio 07
# Recibir número ingresado
$numeroIngresado = $_POST["numeroIngresado"];

# Creación de la variable lista para los números
$listaDeNumeros = "";

# Listar números de forma descendente
for ($i = $numeroIngresado; $i >=1; $i--):
    $listaDeNumeros .= " $i";
endfor;

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Lista:</b> $listaDeNumeros</p>";
