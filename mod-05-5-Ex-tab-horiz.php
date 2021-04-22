<?php
$array01 = [
    'nome' => 'alberto',
    'idade' => 30,
    'empresa' => 'webside',
    'cor' => 'Azul',
    'Profissao' => 'surfer'
];

$chaves = array_keys($array01);
echo "<pre>";
print_r($chaves);
echo "<br>";

$valores = array_values($array01);
print_r($valores);
echo "</pre>";
?>
<style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        border: 1px solid #ddd;
    }

    th, td {
        text-align: left;
        padding: 6px;
        border: 1px solid #ddd;
    }
    
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
<?php
echo "<br>";
echo "<table style='border-colapse: colapse; border: 1px solid black;'>";
echo "<tr>";
foreach ($chaves as $value) {
    echo "  <th>$value</th>";
}
echo "</tr>";
echo "<tr>";
foreach ($valores as $value) {
    echo "  <td>$value</td>";
}
echo "</tr>";
echo "</table>";

echo "<hr>";

echo "<table>";
echo "<tr>";
foreach ($array01 as $key => $value) {
    echo "  <th>$key</th>";
}
echo "</tr>";
echo "<tr>";
foreach ($array01 as $key => $value) {
    echo "  <td>$value</td>";
}
echo "</tr>";
echo "</table>";

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