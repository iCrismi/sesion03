<?php 
$Dia=$_POST['Dia'];
$Mes=$_POST['Mes'];
$Zodiaco="";
if (($Dia>=21 and $Mes==3) or ($Dia<=20 and $Mes==4)){
    $Zodiaco="Aries";

}elseif (($Dia>=21 and $Mes==4) or ($Dia<=21 and $Mes==5)){
    $Zodiaco="Tauro";

}
elseif (($Dia>=22 and $Mes==5) or ($Dia<=21 and $Mes==6)){
    $Zodiaco="Géminis";

}
elseif (($Dia>=22 and $Mes==6) or ($Dia<=22 and $Mes==7)){
    $Zodiaco="Cáncer";

}
elseif (($Dia>=23 and $Mes==7) or ($Dia<=23 and $Mes==8)){
    $Zodiaco="Leo";

}
elseif (($Dia>=24 and $Mes==8) or ($Dia<=23 and $Mes==9)){
    $Zodiaco="Virgo";

}
elseif (($Dia>=24 and $Mes==9) or ($Dia<=23 and $Mes==10)){
    $Zodiaco="Libra";

}
elseif (($Dia>=24 and $Mes==10) or ($Dia<=22 and $Mes==11)){
    $Zodiaco="Escorpio";

}
elseif (($Dia>=23 and $Mes==11) or ($Dia<=21 and $Mes==12)){
    $Zodiaco="Sagitario";

}
elseif (($Dia>=22 and $Mes==12) or ($Dia<=20 and $Mes==1)){
    $Zodiaco="Capricornio";

}
elseif (($Dia>=21 and $Mes==1) or ($Dia<=19 and $Mes==2)){
    $Zodiaco="Acuario";

}
elseif (($Dia>=20 and $Mes==2) or ($Dia<=20 and $Mes==3)){
    $Zodiaco="Piscis";

}
else{
    $Zodiaco="Fecha Incorrecta";
}
echo "Su signo zodiacal es: ".$Zodiaco;
?>
