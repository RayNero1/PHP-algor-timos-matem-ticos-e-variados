<?php
if (isset($_POST['N']) && isset($_POST['sexo'])) {
    $N = $_POST['N'];
    $S = $_POST['sexo'];
    $resultado = 0; 

    switch ($S) {
        case 'masc': 
            $resultado = 72.7 * $N - 58;
            break;
        case 'fem': 
            $resultado = 62.1 * $N - 44.7;
            break;
    }
    echo "<center><h2>Resultado: $resultado</h2></center>";
} 
?>


