<?php

# Ejercicio 08
# Recibir el número ingresado
$numeroIngresado = (int) $_POST["numeroIngresado"];

# Creación de la variable para la cantidad de dígitos
$cantidadDeDigitos = 0;

# Quitar el signo negativo y convertirlo a String
$numeroIngresadoPositivo = (string) abs($numeroIngresado);

# Determinar cuántos dígitos tiene
$cantidadDeDigitos = strlen($numeroIngresadoPositivo);

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Número ingresado:</b> $numeroIngresado</p>";
echo "<p><b>Cantidad de dígitos:</b> $cantidadDeDigitos</p>";
