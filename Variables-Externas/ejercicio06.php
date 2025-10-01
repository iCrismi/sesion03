<?php

# Ejercicio 06
# Recibir la donación ingresada
$donacionIngresada = (float) $_POST["donacionIngresada"];

# Calcular la donacion que pertenece al centro de salud
$donacionAlCentroDeSalud = $donacionIngresada * 0.25;

# Calcular la donacion que pertenece al comedor infantil
$donacionAlComedorInfantil = $donacionIngresada * 0.35;

# Calcular la donacion que pertenece a la escuela infantil
$donacionALaEscuelaInfantil = $donacionIngresada * 0.25;

# Calcular la donacion que pertenece al asilo de ancianos
$donacionAlAsiloDeAncianos = $donacionIngresada * 0.15;

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Donación:</b> S/.$donacionIngresada</p>";
echo "<p><b>Centro de salud:</b> S/.$donacionAlCentroDeSalud</p>";
echo "<p><b>Comedor infantil:</b> S/.$donacionAlComedorInfantil</p>";
echo "<p><b>Escuela infantil:</b> S/.$donacionALaEscuelaInfantil</p>";
echo "<p><b>Asilo de ancianos:</b> S/.$donacionAlAsiloDeAncianos</p>";
