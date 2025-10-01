<?php

# Ejercicio 04
# Recibir los dos números
$primerNumeroIngresado = (int) $_POST["primerNumeroIngresado"];
$segundoNumeroIngresado = (int) $_POST["segundoNumeroIngresado"];

# Creación de la variable lista para los números que se encuentran entre el primero y el segundo número
$listaDeNumeros = "";

# Creación de la variable suma para los números que se encuentran entre ellos
$suma = 0;

# Listar los números que se encuentran entre el primerNumeroIngresado y el segundoNumeroIngresado y sumarlos
for ($i = $primerNumeroIngresado; $i <= $segundoNumeroIngresado; $i++):
    $listaDeNumeros .= " $i";
    $suma += $i;
endfor;

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Lista de números entre $primerNumeroIngresado - $segundoNumeroIngresado:</b> $listaDeNumeros</p>";
echo "<p><b>Suma:</b> $suma</p>";
