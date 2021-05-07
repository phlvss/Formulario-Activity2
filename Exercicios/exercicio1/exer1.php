<?php

echo "<h2>Retangulos</h2>";

$ALT = $_POST['B'];

$BASE = $_POST['H'];

$AREA = $BASE * $ALT;

$PER = ($BASE * $BASE) + ($ALT * $ALT);

echo "Esse é o valor da Área: " .$AREA;

echo "<br><br>";

echo "Esse é o valor do perimetro: " .$PER;

?>


