<?php 
$br = '<br>';
$bolo1 = ['açucar', 'farinha de trigo', 'ovo', 'leite', 'fermento em pó'];
$bolo2 = [
    ...$bolo1,
    'abacaxi', 
    'maracujá', 
    'laranja', 
    'coco', 
    'chocolate'
];
echo $bolo1[0];
echo $br;
echo $bolo1[1];
echo $br;
echo $bolo1[2];
echo $br;
echo $bolo1[3];
echo $br;
echo "Bolo 1.4: $bolo1[4]";
echo $br;
echo "Bolo 2.4: $bolo2[4]";
echo $br;
echo $bolo2[5];
echo $br;
echo $bolo2[6];
echo $br;
echo $br;

$numerosMegasena = [10, 14, 16, 37, 50, 59];
echo "Número 1: $numerosMegasena[0] <br>";
echo "Número 2: $numerosMegasena[1] <br>";
echo "Número 3: $numerosMegasena[2] <br>";
echo "Número 4: $numerosMegasena[3] <br>";
echo "Número 5: $numerosMegasena[4] <br>";
echo "Número 6: $numerosMegasena[5] <br><br>";

$lista1 = ['pessoa 1', 'pessoa 2', 'pessoa 3' ];
$lista2 = ['pessoa 4', 'pessoa 5', 'pessoa 6' ];
$lista3 = [...$lista1, ...$lista2, 'pessoa 10' ];
print_r($lista3);

echo $br;
echo $br;

// Exercicio
$lista = [
    'nome' => 'Beto',
    'idade' => 33,
    'atributos' => [
        'forca' => 89,
        'agilidade' => 84,
        'destreza' => 92
    ],
    'vida' => 1000,
    'esporte' => [
        'opcao1' => 'surf',
        'opcao2' => 'skate',
        'opcao3' => 'futebol'
    ]
];

echo "NOME: ".$lista['nome']."<br>";
echo "FORÇA: ".$lista['atributos']['forca']."<br>";
echo "VIDA: ".$lista['vida']."<br>";
echo "ESPORTE: ";
echo print_r($lista['esporte'])."<br>";

echo phpinfo();
?>