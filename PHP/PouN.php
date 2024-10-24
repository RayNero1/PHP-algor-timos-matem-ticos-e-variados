<?php
if (isset($_POST['N'])) {
    $N = $_POST['N'];
   
    
    if ($N > 0) {
        $resultado = true;
    } else {
        $resultado = false;
    }

    
    if ($resultado == true) {
        echo "POSITIVO (TRUE)";
    } else {
        echo  "NEGATIVO (FALSE)";
    }
} else {
    echo "Por favor, insira um número.";
}
?>
