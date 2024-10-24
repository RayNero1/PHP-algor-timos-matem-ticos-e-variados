<?php
if (isset($_POST['valor'])) {
    $V = $_POST['valor'];

    // Verifica se $V é um número inteiro positivo e primo
    if (is_numeric($V) && (int)$V == $V && $V > 0) {
        echo "$V POSITIVO e VERDADEIRO";
    } else {
        echo "$V FALSO";
    }
}
?>
