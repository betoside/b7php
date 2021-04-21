<?php
session_start();
if ($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>
<form method="GET" action="mod04-9-Exe-2-processa.php">
    <label for="nome">
        Novo nome:
        <br>
        <input type="text" name="nome" autofocus> 
        <button>Adicionar</button>
    </label>
</form>
<?php

$filetxt = "./mod04-9-Exe-3-nomes.txt";
if (file_exists($filetxt)) {

    echo "<h1 style=''>Lista de nomes <a href='mod04-9-Exe-4-excluir-arquivo.php?d=s' style='font-size: 12px; color: red;'>Excluir arquivo de nomes</a> </h1>";
    $texto = file_get_contents($filetxt);
    $texto = explode("\n", $texto);
    echo "<ol>";
    array_map(function($nome){
        if ($nome != "") {
            echo "<li> <a href='mod04-9-Exe-3-excluir-nome.php?n=".$nome."' style='text-decoration: none;'>🔥</a> ".$nome."</li>";
        }
    }, $texto);
    echo "</ol>";

}

// 🔧


/*
mod04-9-Exe-1-index.php
mod04-9-Exe-2-processa.php
mod04-9-Exe-3-nomes.txt
mod04-9-Exe-3-excluir.php
mod04-9-Exe-4-arquivo.php

mod04-10-Excluindo-arquivos.php
mod04-11-Movendo-arquivos.php
mod04-12-Upload-de-arquivos-(1/2).php
mod04-13-Upload-de-arquivos-(2/2).php
*/ 
