<?php
$Dia = $_POST['Dia'];
$Mes = $_POST['Mes'];
if (($Mes == 12 && $Dia >= 21) || ($Mes <= 3 && $Dia <= 20) || ($Mes == 1) || ($Mes == 2)) {
    echo "Estación: Verano";
} 
elseif (($Mes == 3 && $Dia >= 21) || ($Mes <= 6 && $Dia <= 21) || ($Mes == 4) || ($Mes == 5)) {
    echo "Estación: Otoño";
}
 elseif (($Mes == 6 && $Dia >= 22) || ($Mes <= 9 && $Dia <= 22) || ($Mes == 7) || ($Mes == 8)) {
    echo "Estación: Invierno";
}
 elseif (($Mes == 9 && $Dia >= 23) || ($Mes <= 12 && $Dia <= 20) || ($Mes == 10) || ($Mes == 11)) {
    echo "Estación: Primavera";
}
 else {
    echo "Fecha no válida.";
}
?>;