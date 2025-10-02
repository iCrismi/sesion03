<?php
$Año = $_POST['Año'];
$AñoActual = date("Y");
if ($Año > 2000) {
    if ($Año == $AñoActual) {
        echo "PRESENTE";
    } elseif ($Año < $AñoActual) {
        echo "PASADO";
    } else {
        echo "FUTURO";
    }
} else {
    echo "Por favor, ingrese un año mayor a 2000.";
}
echo "<br>El año ingresado es: " . $Año;
echo "<br>El año actual es: " . $AñoActual;
?>