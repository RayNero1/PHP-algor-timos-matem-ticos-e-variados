<?php
if (isset($_POST['N'])) {
    $N = $_POST['N'];

 switch ($N){
   case $N >= 0 and $N <=4.9:
   echo "D!";
   break;
   case $N >=5 and $N <=6.9:
   echo "C!";
   break;
   case $N >=7 and $N <=8.9:
    echo "B!";
   break;
   case $N >=9 and $N <=10:
    echo "A!";
   break;
   case $N >10 or $N <0:
    echo "NOTA INVÁLIDA";
   break;
 }

}





?>