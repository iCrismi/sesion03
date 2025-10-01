<?php

# Ejercicio 01
# Recibir los sueldos de los tres empleados
$sueldoEmpleado01 = (float) $_POST["sueldoEmpleado01"];
$sueldoEmpleado02 = (float) $_POST["sueldoEmpleado02"];
$sueldoEmpleado03 = (float) $_POST["sueldoEmpleado03"];

# Creación de las variables aumento para los respectivos empleados
$aumentoEmpleado01 = 1.1;
$aumentoEmpleado02 = 1.12;
$aumentoEmpleado03 = 1.15;

# Creación de los nuevos sueldos de los respectivos empleados
$nuevoSueldoEmpleado01 = $sueldoEmpleado01 * $aumentoEmpleado01;
$nuevoSueldoEmpleado02 = $sueldoEmpleado02 * $aumentoEmpleado02;
$nuevoSueldoEmpleado03 = $sueldoEmpleado03 * $aumentoEmpleado03;

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Nuevo sueldo del empleado 01:</b> S/.$nuevoSueldoEmpleado01";
echo "<p><b>Nuevo sueldo del empleado 02:</b> S/.$nuevoSueldoEmpleado02";
echo "<p><b>Nuevo sueldo del empleado 03:</b> S/.$nuevoSueldoEmpleado03";
