<?php
session_start();
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if ($nome) {

    $filetxt = "./mod04-9-Exe-3-nomes.txt";

    if (file_exists($filetxt)) {

        $texto = file_get_contents($filetxt);
        $texto .= "\n$nome";
        file_put_contents($filetxt, $texto);
        $_SESSION['aviso'] = "<p style='color: blue;'>Nome adicionado com sucesso</p>";
        header("location: mod04-9-Exe-1-index.php");

    } else {

        file_put_contents($filetxt, $nome);
        $_SESSION['aviso'] = "<p style='color: green;'>Nome adicionado com sucesso</p>";
        header("location: mod04-9-Exe-1-index.php");

    }

} else {

    $_SESSION['aviso'] = "<p style='color: red;'>Preencha o nome corretamente</p>";
    header("location: mod04-9-Exe-1-index.php");
    exit;

}
