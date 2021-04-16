<?php
$numero = [10, 20, 24, 91, 18];
$numeroOrig = $numero;
$pop = array_pop($numero);
echo '$numero = [10, 20, 24, 91, 18]';
echo "<hr>";

echo "array_pop($ numero): $pop";
echo "<br>---<br>";
echo '$numero: ';
print_r($numero);
echo "<hr>";

$shift = array_shift($numero);
echo "array_shift($ numero): $shift";
echo "<br>---<br>";
echo '$numero: ';
print_r($numero);
echo "<hr>";


if (in_array(24, $numero)) {
    echo 'in_array(24, $numero): EXISTE';
    echo "<br>---<br>";
    print_r($numero);
    echo "<hr>";
}

$pos = array_search(91, $numero);
echo "array_search(91, $ numero): $pos";
echo "<br>---<br>";
$pos = array_search(17, $numero);
echo "array_search(17, $ numero): ' $pos'";
echo "<hr>";

echo '$numero: ';
print_r($numero);
echo "<br>---<br>";
echo "$ numeroOrig: ";
print_r($numeroOrig);
echo "<br>---<br>";

$ordemCresc = rsort($numero);
echo "<br>---<br>";
echo "rsort($ numero): $ordemCresc";
echo "<br>---<br>";
echo "rsort($ numero): ";
print_r($numero);
echo "<br>---<br>";

$sortDescrecente = $numeroOrig;
rsort($sortDescrecente);
echo "rsort($ sortDescrecente): ";
print_r($sortDescrecente);
echo "<br>---<br>";

$mantendoAChave = $numeroOrig;
arsort($mantendoAChave);
echo "arsort($ mantendoAChave): ";
print_r($mantendoAChave);
echo "<hr>";

$assuntos = 'amor pessoal profissional familia';
echo '$assuntos = "amor pessoal profissional familia"';
echo "<br>---<br>";
$assuntosArray = explode(' ',$assuntos);
print_r($assuntosArray);
echo "<br>---<br>";
$implodeArray = implode(', ', $assuntosArray);
echo '$implodeArray: '.$implodeArray;



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