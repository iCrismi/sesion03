<?php

# Ejercicio 09
# Recibir el número ingresado
$numeroIngresado = (int) $_POST["numeroIngresado"];

# Creación de la variable para la cantidad de dígitos
$cantidadDeDigitos = 0;

# Creación de la variable para la cantidad de dígitos pares
$cantidadDeDigitosPares = 0;

# Quitar el signo negativo y convertirlo a String
$numeroIngresadoPositivo = (string) abs($numeroIngresado);

# Determinar cuántos dígitos tiene
$cantidadDeDigitos = strlen($numeroIngresadoPositivo);

# Calcular la cantidad de dígitos pares
for ($i = 0; $i < $cantidadDeDigitos; $i++):
    $digito = (int) $numeroIngresadoPositivo[$i];

    if ($digito % 2 == 0) $cantidadDeDigitosPares++;
endfor;

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Número ingresado:</b> $numeroIngresado</p>";
echo "<p><b>Cantidad de dígitos:</b> $cantidadDeDigitos</p>";
echo "<p><b>Dígitos pares:</b> $cantidadDeDigitosPares</p>";
