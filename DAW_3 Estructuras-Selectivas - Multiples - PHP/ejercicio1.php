<?php

$Semana = $_POST['txtDia'];

switch ($Semana) {
    case 1:
        echo"Hoy es Lunes";

        break;
    case 2:
        echo"Hoy es Martes";

        break;
    case 3:
        echo"Hoy es MIercoles";

        break;
    case 4:
        echo"Hoy es Jueves";

        break;
    case 5:
        echo"Hoy es Viernes";

        break;
    case 6:
        echo"Hoy es Sabado";

        break;
    case 7:
        echo"Hoy es Domingo";

        break;

    default:
        echo "Dia no valido";
        break;
}
?>

