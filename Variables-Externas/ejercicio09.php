<?php

# Ejercicio 09
# Recibir el número ingresado
$numeroIngresado = $_POST["numeroIngresado"];

# Determinar la cifra central
# 1. cantidad de cifras
$cantidadDeCifras = strlen($numeroIngresado);

# 2. cantidad de cifras entre 2 y usar aproximacion para arriba
$posicionCifraCentral = (int) ceil($cantidadDeCifras / 2) - 1;

# 3. Determinar la cifra central
$cifraCentral = $numeroIngresado[$posicionCifraCentral];

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Número ingresado:</b> $numeroIngresado</p>";
echo "<p><b>Cifra central:</b> $cifraCentral</p>";
