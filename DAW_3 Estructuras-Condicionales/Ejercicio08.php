<?php
$nivel = $_POST['Nivel'];
$colegio = $_POST['Colegio'];
$importe = 0;

switch ($colegio) {
    case "N": 
        switch ($nivel) {
            case "A":
                $importe = 300.00;
                break;
            case "B":
                $importe = 200.00;
                break;
            case "C":
                $importe = 100.00;
                break;
            default:
                echo "Nivel no válido.";
                exit;
        }
        break;
    case "P": 
        switch ($nivel) {
            case "A":
                $importe = 400.00;
                break;
            case "B":
                $importe = 300.00;
                break;
            case "C":
                $importe = 200.00;
                break;
            default:
                echo "Nivel no válido.";
                exit;
        }
        break;
    default:
        echo "Colegio no válido.";
        exit;
}
echo "El importe a pagar es: $importe";
?>