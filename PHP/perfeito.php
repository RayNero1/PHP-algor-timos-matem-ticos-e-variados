<?php
if (isset($_POST['num'])) {
    $num = $_POST['num'];
    $soma = 0;

    // Encontra todos os divisores próprios de $num
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $soma += $i;
        }
    }

    // Verifica se a soma dos divisores é igual ao número
    if ($soma == $num) {
        echo "$num é um número perfeito.";
    } else {
        echo "$num não é um número perfeito.";
    }
} else {
    echo "Por favor, insira um número.";
}
?>
