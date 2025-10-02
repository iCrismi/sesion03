<?php 
$Num = $_POST['Num'];
if ($Num < 10) {
    echo "El número $Num es de un dígito.";
}
 elseif ($Num < 100) {
    echo "El número $Num es de dos dígitos.";
}
 elseif ($Num < 1000) {
    echo "El número $Num es de tres dígitos.";
}
 else {
    echo "El número $Num tiene más de tres dígitos.";
}
?>