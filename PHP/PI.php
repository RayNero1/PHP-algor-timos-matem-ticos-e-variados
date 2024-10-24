<?php
if (isset($_POST['N'])) {
    $N = $_POST['N'];
   
    
    if ($N % 2 ==0) {
        $resultado = true;
    } else {
        $resultado = false;
    }
    
    if ($resultado == true) {
        echo "PAR (TRUE)";
    } else {
        echo  "IMPAR (FALSE)";
    }

    
} else {
    echo "Por favor, insira um número.";
}
?>
