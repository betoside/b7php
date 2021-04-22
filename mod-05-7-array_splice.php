<?php
$array01 = ['a','b','c','d','e','f'];
array_splice($array01, 1, 1); 
// comeca do index, remove a qtd de itens
// MODIFICA O PROPRIO ARRAY
echo "<pre>";
print_r($array01);
echo "<hr>";

// remover todos os itens a partir do C
array_splice($array01, 2);
print_r($array01);
echo "<hr>";

$array02 = ['a','b','c','d','e','f'];
array_splice($array02, 2, 3);
print_r($array02);
echo "<hr>";

// Teoricamente é uma substituição
$array03 = ['a','b','c','d','e','f'];
array_splice($array03, 2, 1, '-K-');
print_r($array03);
echo "<hr>";

// Teoricamente é uma substituição
$array04 = ['a','b','c','d','e','f'];
array_splice($array04, 2, 2, '-H-');
print_r($array04);
echo "<hr>";

// Teoricamente é uma substituição
$array05 = ['a','b','c','d','e','f'];
array_splice($array05, 2, 2, ['-H-','-A-']);
print_r($array05);
echo "<hr>";

$array05 = ['a','b','c','d','e','f'];
array_splice($array05, 2, 2, [90, 91, 92]);
print_r($array05);
echo "<hr>";

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