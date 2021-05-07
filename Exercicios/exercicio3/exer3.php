<?php

$NOME = $_POST['nome'];


$SENHA = $_POST['senha'];


if ($NOME != "etecia" || $SENHA != "etecia238") {
    
    echo "Você não tem permissão de visualizar essa pagina";
}

else 
   { 
        echo "Autenticação  realizada  com  sucesso";
    }

?>