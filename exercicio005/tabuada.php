<?php
$numero = $_POST['numero'] ?? null;
 
if ($numero !== null) {
    echo "<h3>Tabuada do $numero:</h3>";
 
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado<br>";
    }
} else {
    echo "Nenhum número informado.";
}
?>