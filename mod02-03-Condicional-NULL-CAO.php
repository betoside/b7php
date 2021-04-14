<?php 

$nome = 'Caloi';
// $sobreNome = 'Cross';

$nomeCompleto = $nome ?? 'Visitante';
// $nomeCompleto .= isset(($sobreNome)) ? $sobreNome : '' ;
// $nomeCompleto .= ($sobreNome) ? $sobreNome : '' ;
$nomeCompleto .= $sobreNome ?? '' ;

echo 'Nome: ' . $nomeCompleto;



?>