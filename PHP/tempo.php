<?php
if (isset($_POST['segundos'])) {
    $segundos = $_POST['segundos'];

    $horas = (int)($segundos / 3600);   // Converte segundos em horas, minutos e segundos
    $segundos = $segundos % 3600;
    $minutos = (int)($segundos / 60);
    $segundos = $segundos % 60;

    echo "<h2>Resultados:</h2>";
    echo "<p>Horas: $horas</p>";
    echo "<p>Minutos: $minutos</p>";
    echo "<p>Segundos: $segundos</p>";
} else {
    echo "<h2>Por favor, insira o tempo em segundos.</h2>";
}
?>
