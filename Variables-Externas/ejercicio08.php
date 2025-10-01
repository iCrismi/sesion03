<?php

# Ejercicio 08
# Recibir el número ingresado
$numeroIngresado = (int) $_POST["numeroIngresado"];

# Hallar el último dígito
# Nota: Para hallar el último digito de un número, solo debe hallar el residuo del número en mención entre 10.
$ultimoDigito = $numeroIngresado % 10;

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Número ingresado:</b> $numeroIngresado</p>";
echo "<p><b>Último dígito:</b> $ultimoDigito</p>";
