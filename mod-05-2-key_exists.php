<?php
$array01 = [
    'nome' => 'alberto',
    'age' => 30,
    'empresa' => 'webside',
    'cor' => 'Azul',
    'Profissao' => 'surfer'
];

if (key_exists('idade', $array01)) {
    $idade = $array01['idade'];
    echo '$array01["idade"]: '.$idade;
} else {
    $idade = $array01['age'];
    echo '$array01["age"]: '.$idade;
}


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