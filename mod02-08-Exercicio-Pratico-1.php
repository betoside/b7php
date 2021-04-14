<?php 

// tem o propósito para trabalhar com arrays

$dash = '-';

for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 10; $j++) { 
        $linha = $linha . $dash;
    }
    echo $linha . "<br>";
    $linha = '';
}

echo "<hr>";

for($a = 0; $a < 10; $a++){
    for($i = 0; $i < 10; $i++){
        echo "-";
    }
    echo "<br/>";
}

  