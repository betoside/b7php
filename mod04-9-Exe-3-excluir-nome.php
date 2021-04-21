<?php
session_start();
$nome = filter_input(INPUT_GET, 'n', FILTER_SANITIZE_SPECIAL_CHARS);

if (!$nome) {

    header("location: mod04-9-Exe-1-index.php");
    exit;

} else {

    echo "N: ". $nome;
    $nomeArr = [$nome];
    echo '<hr>';

    $filetxt = "./mod04-9-Exe-3-nomes.txt";
    $texto = file_get_contents($filetxt);
    $listaNomes = explode("\n", $texto);
    
    echo '$listaNomes: '.$listaNomes;
    echo '<hr>';

    echo 'print_r($listaNomes): ';
    print_r($listaNomes);
    echo '<hr>';

    $listaNomesAtualizado = array_diff($listaNomes, $nomeArr);
    echo 'print_r($listaNomesAtualizado): ';
    print_r($listaNomesAtualizado);
    echo '<hr>';
    
    echo '$listaNomesAtualizado: <br>';
    $gravaNomes = "";
    foreach ($listaNomesAtualizado as $chave => $valor) {
        if (strlen($valor) > 0) {
            echo "Item ".$chave.": ".$valor." [".strlen($valor)."]<br>";
            $gravaNomes .= "$valor\n";
        }
    }
    echo '<br>';
    echo '$gravaNomes: '.$gravaNomes;
    echo '<br>';
    echo "<a href='mod04-9-Exe-1-index.php' style='font-size: 12px; color: blue;'>voltar p index</a>";

    file_put_contents($filetxt, $gravaNomes);

    $_SESSION['aviso'] = "<p style='color: blue;'>Nome excluído com sucesso</p>";
    header("location: mod04-9-Exe-1-index.php");
}