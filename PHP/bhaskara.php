<?php
if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];


    if ($a == 0) {
        echo "<h2>O valor de 'a' não pode ser zero.</h2>";
    } else {
        // Calcula o delta
        $delta = $b**2 - 4*$a*$c;

        echo "<p>Delta: $delta</p>"; 

        // Verifica se delta é negativo
        if ($delta < 0) {
            echo "<h2>As raízes são imaginárias.</h2>";
        } else {
           
            $raiz1 = (-$b + sqrt($delta)) / (2 * $a);
            $raiz2 = (-$b - sqrt($delta)) / (2 * $a);

            echo "<h2>Resultados:</h2>";
            echo "<p>Raiz 1: $raiz1</p>";
            echo "<p>Raiz 2: $raiz2</p>";
        }
    }
} else {
    echo "<h2>Por favor, preencha todos os campos.</h2>";
}
?>