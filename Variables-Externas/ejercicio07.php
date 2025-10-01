<?php

# Ejercicio 07
# Recibir la cantidad ingresada en soles
$cantidadIngresada = (float) $_POST["cantidadIngresada"];

# Tipos de cambio
$dolarASoles = 3.25;
$euroAdolares = 1.15;

# Convertir de soles a dólares
$solesADolares = $cantidadIngresada / $dolarASoles;

# Convertir de dólares a euros
$dolaresAEuros = $solesADolares / $euroAdolares;

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Cantidad ingresada en soles:</b> S/." . number_format($cantidadIngresada, 2) . "</p>";
echo "<p><b>Equivalente a dólares:</b> &dollar;" . number_format($solesADolares, 2) . "</p>";
echo "<p><b>Equivalente a euros:</b> &euro;" . number_format($dolaresAEuros, 2) . "</p>";
