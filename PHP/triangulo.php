<?php
if (isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z'])) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];

    if ($x < ($y + $z) && $y < ($x + $z) && $z < ($x + $y)) {         // Verifica se os valores podem formar um triângulo
        
        if ($x == $y && $y == $z) {                 // Verifica o tipo de triângulo
            $tipo = "Triângulo Equilátero";
        } elseif ($x == $y || $y == $z || $x == $z) {
            $tipo = "Triângulo Isósceles";
        } else {
            $tipo = "Triângulo Escaleno";
        }

        echo "<center><h2>Os valores podem formar um triângulo do Tipo: ($tipo)</h2></center>";
    } else {
        echo "<center><h2>Os valores não podem formar um triângulo.</h2></center>";
    }
} 
?>
