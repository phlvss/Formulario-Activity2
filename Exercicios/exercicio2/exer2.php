<?php

echo "<h2>Valor do seu imc</h2>";

    $ALT = $_POST['alt'];


    $PESO = $_POST['peso'];

    
   $IMC =  $PESO / ($ALT * $ALT);


  echo "Seu IMC é de" .$IMC;


  if ($IMC > 25) {
       echo "Você está acima do peso.";
       echo "<br> <br>";
       echo "<img src='gordo.png'>";}

  else {
      
    echo "Você está saudável.<br>";

    echo "<br> <br>";
    echo "<img src='magro.png'>";}


?>