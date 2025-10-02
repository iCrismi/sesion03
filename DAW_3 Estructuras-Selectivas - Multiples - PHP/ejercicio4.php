<?php
$premio = $_POST['txtcompra'];

$numero = 0;
if ($premio >= 1000) {
    $numero = mt_rand(1, 5);

    switch ($numero) {
        case 1:

            echo "GANÓ UN MOUSE";
            break;
        case 2:

            echo "GANÓ UN TECLADO";
            break;
        case 3:

            echo "GANÓ UNA CAMARA WEB";
            break;
        case 4:

            echo "GANÓ UNOS PARLANTES";
            break;
        case 5:

            echo "GANÓ UNA MEMORIA USB";
            break;
        default:
            break;
    }
} else {
    echo "Gracias por su compra";
}
?>;

