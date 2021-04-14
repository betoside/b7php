<?php 

$idade = 40;

// (condicao) ? resultado positivo : resultado negativo ;

echo ($idade > 18) ? 'Maior de idade' : 'Menor de idade';

$maioridade = ($idade > 18) ? true : false ;

if ($maioridade) {
    echo '<br> Maior de idade';
}

?>