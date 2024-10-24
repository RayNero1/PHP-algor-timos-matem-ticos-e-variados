<?php
if (isset($_POST['anos']) && isset($_POST['meses']) && isset($_POST['dias'])) {
    $anos = $_POST['anos'];
    $meses = $_POST['meses'];
    $dias = $_POST['dias'];

    
    $total = $anos * 365 + $meses * 30 + $dias;

    echo "<h2>Idade em dias:</h2>";
    echo "<p>Total de dias: $total</p>";
} else {
    echo "<h2>Por favor, preencha todos os campos.</h2>";
}
?>
