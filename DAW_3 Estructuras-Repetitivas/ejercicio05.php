<?php

# Ejercicio 05
# Recibir los números m y n
$m = (int) $_POST["m"];
$n = (int) $_POST["n"];

# Creación de la variable mensaje para mostrar el resultado final
$mensaje = "";

# Verificar si m es mayor que n
if ($m > $n) {
    $mensaje = "El valor de m no tiene que ser mayor que el valor de n. Invierta los valores";
} else {
    for ($i = $m; $i <= $n; $i ++):
        if ($i % 2 == 0) $mensaje .= " $i";
    endfor;
}

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p>$mensaje</p>";