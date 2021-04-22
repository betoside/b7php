<?php
$array01 = ['a','b','c','d','e','f'];
$retorno = array_slice($array01, 0, 3);
echo "<pre>";
print_r($retorno);
echo "<br>";

$retorno1 = array_slice($array01, 2, 2);
print_r($retorno1);
echo "<br>";

$retorno2 = array_slice($array01, -2, 2);
print_r($retorno2);
echo "<br>";

$penultimo = array_slice($array01, -2, 1);
print_r($penultimo);
echo "<br>";

$ultimo = array_slice($array01, -1, 1);
print_r($ultimo);
echo "<br>";

/*
mod-05-1-Array-Range.php
mod-05-2-key_exists.php
mod-05-3-array_keys-e-array_values.php
mod-05-4-Ex-tab-vert.php
mod-05-5-Ex-tab-horiz.php
mod-05-6-array_slice.php

mod-05-7-array_splice.php
mod-05-8-array_reduce.php
mod-05-9-Descontruindo-usando-list.php
*/ 