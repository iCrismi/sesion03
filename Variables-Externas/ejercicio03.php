<?php

# Ejercicio 03
# Recibir los números ingresados de la cantidade de alumnos en computación, contabilidad y enfermería
$cantidadDeAlumnosEnComputacion = (int) $_POST["cantidadDeAlumnosEnComputacion"];
$cantidadDeAlumnosEnContabilidad = (int) $_POST["cantidadDeAlumnosEnContabilidad"];
$cantidadDeAlumnosEnEnfermeria = (int) $_POST["cantidadDeAlumnosEnEnfermeria"];

# Total de alumnos
$totalDeAlumnos = $cantidadDeAlumnosEnComputacion + $cantidadDeAlumnosEnContabilidad + $cantidadDeAlumnosEnEnfermeria;

# Calcular el porcentaje de alumnos en computación
$porcentajeDeAlumnosEnComputacion = ($cantidadDeAlumnosEnComputacion * 100) / $totalDeAlumnos;

# Calcular el porcentaje de alumnos en contabilidad
$porcentajeDeAlumnosEnContabilidad = ($cantidadDeAlumnosEnContabilidad * 100) / $totalDeAlumnos;

# Calcular el porcentaje d ealumnos en enfermería
$porcentajeDeAlumnosEnEnfermeria = ($cantidadDeAlumnosEnEnfermeria * 100) / $totalDeAlumnos;

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Porcentaje de alumnos en computación:</b>" . number_format($porcentajeDeAlumnosEnComputacion, 2) . "%</p>";
echo "<p><b>Porcentaje de alumnos en contabilidad:</b>" . number_format($porcentajeDeAlumnosEnContabilidad, 2) . "%</p>";
echo "<p><b>Porcentaje de alumnos en enfermería:</b>" . number_format($porcentajeDeAlumnosEnEnfermeria, 2) . "%</p>";
