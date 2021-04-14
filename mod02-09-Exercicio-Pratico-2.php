<?php 

// regras: só pode usar 1 echo e 1 "-"


for ($i = 1; $i <= 20; $i++) {
    echo str_repeat("- ", $i) . "<br/>";
}

echo "<hr>";


for($linha=1;$linha<=20;$linha++){
    for($coluna=1;$coluna<=$linha;$coluna++){
        echo "- ";
    }
    echo "<br>";
}

  