<?php

# Ejercicio 05
# Recibir la cantidad de dinero a repartir
$cantidadIngresada = (float) $_POST["cantidadIngresada"];

# Recibir las edades de las persona
$edadIngresada01 = (int) $_POST["edadIngresada01"];
$edadIngresada02 = (int) $_POST["edadIngresada02"];
$edadIngresada03 = (int) $_POST["edadIngresada03"];

# Suma total de las edades
$sumaTotalDeEdades = $edadIngresada01 + $edadIngresada02 + $edadIngresada03;

# Calcular la cantidad de dinero a repartir a tres personas en forma proporcional a sus edades
# Fórmula
# monto de la persona = edad de la persona x monto a repartir
#                       -------------------------------------
#                               suma total de edades

function repartirDinero($edad) {
    global $cantidadIngresada, $sumaTotalDeEdades;
    return (float) ($edad * $cantidadIngresada) / $sumaTotalDeEdades;
}

# Primer persona
$dineroDeLaPersona01 = repartirDinero($edadIngresada01);
$dineroDeLaPersona02 = repartirDinero($edadIngresada02);
$dineroDeLaPersona03 = repartirDinero($edadIngresada03);

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Cantidad de dinero:</b> S/.$cantidadIngresada</p>";
echo "<p><b>Persona 01:</b> S/." . number_format($dineroDeLaPersona01, 1) . "</p>";
echo "<p><b>Persona 02:</b> S/." . number_format($dineroDeLaPersona02, 1) . "</p>";
echo "<p><b>Persona 03:</b> S/." . number_format($dineroDeLaPersona03, 1) . "</p>";
