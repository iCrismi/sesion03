<?php
$mes = $_POST['txtMes'];
switch ($mes) {
    case 1:
    case 2:
    case 3:
        echo "Pertenece al primer trimestre";
        break;
    case 4:
    case 5:
    case 6:
        echo "Pertenece al segundo trimestre";
        break;
    case 7:
    case 8:
    case 9:
        echo "Pertenece al tercer trimestre";
        break;
    case 10:
    case 11:
    case 12:
        echo "Pertenece al cuarto trimestre";
        break;
    default:
        echo"Numero no valido";
        break;
}
?>;

