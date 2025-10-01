<?php

# Ejercicio 02
# Recibir los dos números ingresados
$numeroIngresado01 = (int) $_POST["numeroIngresado01"];
$numeroIngresado02 = (int) $_POST["numeroIngresado02"];

# Solución a la pregunta A
$suma = (2 * $numeroIngresado01) + pow($numeroIngresado02, 2);

# Solución a la pregunta B
$promedio = (pow($numeroIngresado01, 3) + pow($numeroIngresado02, 3)) / 2;

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Solución A:</b> $suma</p>";
echo "<p><b>Solución B:</b> $promedio</p>";
