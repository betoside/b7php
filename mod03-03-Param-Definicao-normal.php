<?php

function somar ($n1, $n2) {
    $total = $n1 + $n2;
    return $total . "<br>";
}

// 1
$soma = somar(100, 5);
echo $soma;

// 2
echo somar(100, 10);

// 3
$x = somar(1,2);
$y = somar(3,4);
$w = somar($x,$y);
echo $w;



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
