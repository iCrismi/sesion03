<?php

# Ejercicio 04
# Recibir los números ingresados
$numeroIngresado01 = (int) $_POST["numeroIngresado01"];
$numeroIngresado02 = (int) $_POST["numeroIngresado02"];
$numeroIngresado03 = (int) $_POST["numeroIngresado03"];

# Almacenarlos en una variable
$numero = "$numeroIngresado01$numeroIngresado02$numeroIngresado03";

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Primer número ingresado:</b> $numeroIngresado01</p>";
echo "<p><b>Segundo número ingresado:</b> $numeroIngresado02</p>";
echo "<p><b>Tercer número ingresado:</b> $numeroIngresado03</p>";
echo "<p><b>Número final:</b> $numero</p>";
