<?php
$Compra = $_POST['Compra'];
$Descuento = 0;
if ($Compra >= 1000) {
    $Descuento = $Compra * 0.10;
}
$Total = $Compra - $Descuento;
echo "Valor inicial: S/. " . number_format($Compra, 2) . "<br>";
echo "Descuento: S/. " . number_format($Descuento, 2) . "<br>";
echo "Total neto a pagar: S/. " . number_format($Total, 2) . "<br>";