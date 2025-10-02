<?php
$Temp = $_POST['Temp'];
if ($Temp > 39) {
    echo "Fiebre Alta: Diríjase al Centro de Salud más cercano.";
}
 elseif ($Temp >= 37 && $Temp <= 38) {
    echo "Fiebre: Tómese una pastilla y repose.";
}
 elseif ($Temp >= 35 && $Temp <= 36) {
    echo "Temperatura Normal.";
}
 elseif ($Temp < 35) {
    echo "Temperatura muy baja: Tómese algo caliente.";
}
 else {
    echo "Valor de temperatura no válido.";
}
?>