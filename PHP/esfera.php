<?php
if (isset($_POST['raio']) && isset($_POST['perimetro'])) {
    $raio = $_POST['raio'];
    $p = $_POST['perimetro'];

  $V = (4/3*3.14159)*$raio**3;
 echo "O volume da esfera é de: $V";

} else {
    echo "<center><h2>Por favor, insira os valores do raio e perimetro.</h2></center>";
}

?>