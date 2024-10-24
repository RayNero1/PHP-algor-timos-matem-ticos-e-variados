<?php
if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3']) && isset($_POST['operacao'])) {
    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    $n3 = $_POST['numero3'];
    $operacao = $_POST['operacao'];
    $resultado = 0; 

    switch ($operacao) {
        case 'A': // Média aritmética
            $resultado = ($n1 + $n2 + $n3) / 3;
            break;
        case 'P': // Média ponderada
            $pesos = [0.2, 0.5, 0.3]; // Exemplo de pesos
            $resultado = ($n1 * $pesos[0] + $n2 * $pesos[1] + $n3 * $pesos[2]) / array_sum($pesos);
            break;
        case 'H': // Média harmônica
            if ($n1 == 0 || $n2 == 0 || $n3 == 0) {
                echo "<center><h2>Erro: Divisão por zero não é permitida.</h2></center>";
                exit;
            }
            $resultado = 3 / ((1/$n1) + (1/$n2) + (1/$n3));
            break;
        default:
            echo "<center><h2>Operação inválida.</h2></center>";
            exit;
    }
    
    echo "<center><h2>Resultado: $resultado</h2></center>";
} else {
    echo "<center><h2>Por favor, preencha todos os campos.</h2></center>";
}
?>
