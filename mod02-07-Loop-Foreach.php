<?php 

// tem o propósito para trabalhar com arrays

$ingredientes = [
    'açúcar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];

// forma simples
foreach ($ingredientes as $ingrediente) {
    echo "Item: ".$ingrediente."<br>";
}

echo "<hr>";
print_r($ingredientes);
echo "<hr>";

// pegando a chave
foreach ($ingredientes as $chave => $valor) {
    echo "Item ".$chave.": ".$valor."<br>";
}


// 7-Loop-Foreach
// 8-Exercício-Prático-1
// 9-Exercício-Prático-2