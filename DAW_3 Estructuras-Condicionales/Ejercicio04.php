<?php
$Nom1 = $_POST['Nom1'];
$Edad1 = $_POST['Edad1'];
$Nom2 = $_POST['Nom2'];
$Edad2 = $_POST['Edad2'];
if ($Edad1 > $Edad2) {
    $Mayor = $Nom1;
    $Diferencia = $Edad1 - $Edad2;
} elseif ($Edad2 > $Edad1) {
    $Mayor = $Nom2;
    $Diferencia = $Edad2 - $Edad1;
} else {
    echo "Los hermanos tienen la misma edad.";
    exit;
}
echo "El hermano mayor es $Mayor y la diferencia de edad es de $Diferencia años.";
?>
