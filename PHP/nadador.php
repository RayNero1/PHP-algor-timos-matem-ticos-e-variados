<?php
if (isset($_POST['cat'])) {
    $C = $_POST['cat'];

 switch ($C){
   case $C >= 5 and $C <=7:
   echo "CATEGORIA: Infantil A!";
   break;
   case $C >=8 and $C <=10:
   echo "CATEGORIA: Infantil B!";
   break;
   case $C >=11 and $C <=13:
    echo "CATEGORIA: Juvenil A!";
    break;
    case $C >=14 and $C <=17:
        echo "CATEGORIA: Juvenil B!";
        break;
    case $C >=18:
        echo "CATEGORIA: Adulto";
        break;
 }

}





?>