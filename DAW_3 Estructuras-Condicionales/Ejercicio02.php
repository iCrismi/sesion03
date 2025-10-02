<?php
$Num1 = $_POST['Num1'];
$Num2 = $_POST['Num2']; 
$Num3 = $_POST['Num3'];
$Suma = $Num1 + $Num2;
if ($Num3 == $Suma) {
    echo "El tercer número es igual a la suma del primero y el segundo.";
} else {
    echo "El tercer número no es igual a la suma del primero y el segundo.";
}
echo "<br>El primer número es: " . $Num1;
echo "<br>El segundo número es: " . $Num2;
echo "<br>El tercer número es: " . $Num3;
echo "<br>La suma del primer y segundo número es: " . $Suma;
?>