<?php

# Ejercicio 10
# Recibir el número ingresado
$numeroIngresado = (int) $_POST["numeroIngresado"];

# Creación de la variable para la cantidad de dígitos
$cantidadDeDigitos = 0;

# Creación de la variable para el dígito mayor
$digitoMayor = 0;

# Quitar el signo negativo y convertirlo a String
$numeroIngresadoPositivo = (string) abs($numeroIngresado);

# Determinar cuántos dígitos tiene
$cantidadDeDigitos = strlen($numeroIngresadoPositivo);

# Recorrer y devolver el número mayor
for ($i = 0; $i < $cantidadDeDigitos; $i++):
    $digito = (int) $numeroIngresadoPositivo[$i];

    $digitoMayor = ($digito > $digitoMayor) ? $digito : $digitoMayor;
endfor;

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>El número ingresado:</b> $numeroIngresado</p>";
echo "<p><b>El dígito mayor es:</b> $digitoMayor</p>";
