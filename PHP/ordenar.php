<?php
if (isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['valor3'])) {
    $valores = [
        $_POST['valor1'],
        $_POST['valor2'],
        $_POST['valor3']
    ];

    sort($valores);  // Ordena os valores em ordem crescente

    echo "<center><h1>Valores em Ordem Crescente:</h1></center>";
    echo "<center><h2>1°: $valores[0]</p></center></h2>";
    echo "<center><h2>2°: $valores[1]</p></center></h2>";
    echo "<center><h2>3°: $valores[2]</p></center></h2>";
} 
