<?php

$lista = ['nome1', 'nome2', 'nome3', 'nome4', 'nome5', 'nome6'];
$aprovados = ['nome2', 'nome3', 'nome6'];

echo '$lista: '.$lista;
echo "<hr>";
print_r($lista);
echo "<hr>";
echo 'count($lista): '.count($lista);
echo "<hr>";

$reprovados = array_diff($lista, $aprovados);

echo '$aprovados = ["nome2", "nome3", "nome6"]: ';
print_r($aprovados);
echo "<br>---<br>";
echo '$reprovados = array_diff($lista, $aprovados): ';
print_r($reprovados);
echo "<hr>";

$numero = [10, 20, 24, 91, 18];
$filtrados = array_filter($numero, function($item){
    if ($item < 30) {
        return true;
    } else {
        return false;
    }
});
echo '$numero = [10, 20, 24, 91, 18]';
echo "<br>---<br>";
echo '$numero: filtrados < 30 :: ';
print_r($filtrados);
echo "<hr>";

$dobrar = array_map(function($item){
    return $item * 2;
}, $numero);
echo '$numero = [10, 20, 24, 91, 18]';
echo "<br>---<br>";
echo 'Dobrar: ';
print_r($dobrar);
echo "<hr>";

// echo "<br>---<br>";
// echo "<hr>";
/*
template: mod03-01-nome-aula
mod03-01-Introducao-Funcoes.php
mod03-02-Definindo-função.php
mod03-03-Param-Definicao-normal.php
mod03-04-Param-Type-Valor.php
mod03-05-Param-Referencia-Valor.php
mod03-06-Func-Anonimas.php
mod03-07-Func-Arrow.php
mod03-08-Func-Recursivas.php
mod03-09-Func-Nativas-Matematica.php
mod03-10-Func-Nativas-String-1-2.php
mod03-11-Func-Nativas-String-2-2.php
mod03-12-Func-Nativas-Array-1-2.php
mod03-13-Func-Nativas-Array-2-2.php
mod03-14-Func-Nativas-Data/Hora.php
mod03-15-Exercicio-Pratico.php
mod03-16-Trabalhando-multiplos-arquivos.php
mod03-17-Trabalhando-pastas-diferentes.php
*/ 