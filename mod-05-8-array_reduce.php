<?php
$pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
    ['nome' => 'Beltrana', 'sexo' => 'F', 'nota' => 10],
    ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 9],
    ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9]
];

// quantidade de homens
function contar_m($subtotal, $item){
    if ($item['sexo'] === 'M') {
        $subtotal ++;
    }
    return $subtotal;
}
$total_m = array_reduce($pessoas, 'contar_m');
echo "Total de homens: $total_m <hr>";

// soma das notas dos homens
function soma_m($subtotal, $item){
    if ($item['sexo'] === 'M') {
        $subtotal += $item['nota'];
    }
    return $subtotal;
}
$resultadoSoma_m = array_reduce($pessoas, 'soma_m');
echo "Soma das notas de homens: $resultadoSoma_m <hr>";

// média dos homens
$media_m = $resultadoSoma_m / $total_m;
echo "Soma das notas de homens: $media_m <hr>";



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