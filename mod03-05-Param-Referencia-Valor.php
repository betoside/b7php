<?php

function somar ($n1, $n2, &$total) {
    $total = $n1 + $n2 +$n3;
    // return $total;
    // return $total . "<br>";
}

// 1
$x = 3;
$y = 3;
$soma = 0;
// $soma = somar($x,$y);
// echo "Total: ".$soma;

// 2
somar($x,$y, $soma);
echo "Total: ".$soma;
echo "<hr>";

// 3 funcoes nativas que usam REFERENCIA
$lista = [10,5,1];
echo "momento 1: ";
print_r($lista);
echo "<br>";
sort($lista);
echo "momento 2: ";
print_r($lista);


// template: mod03-01-nome-aula
// mod03-01-Introducao-Funcoes
// mod03-02-Definindo-função
// mod03-03-Param-Definicao-normal
// mod03-04-Param-Type-Valor
// mod03-05-Param-Referencia-Valor
// mod03-06-Func-Anonimas
// mod03-07-Func-Arrow
// mod03-08-Func-Recursivas
// mod03-09-Func-Nativas-Matematica
// mod03-10-Func-Nativas-String-1-2
// mod03-11-Func-Nativas-String-2-2
// mod03-12-Func-Nativas-Array-1-2
// mod03-13-Func-Nativas-Array-2-2
// mod03-14-Func-Nativas-Data/Hora
// mod03-15-Exercicio-Pratico
// mod03-16-Trabalhando-multiplos-arquivos
// mod03-17-Trabalhando-pastas-diferentes
