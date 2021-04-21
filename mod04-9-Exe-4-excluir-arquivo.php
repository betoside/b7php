<?php
session_start();
$deletar = filter_input(INPUT_GET, 'd', FILTER_SANITIZE_SPECIAL_CHARS);
if ($deletar == 's') {
    unlink('mod04-9-Exe-3-nomes.txt');
    $_SESSION['aviso'] = "<p style='color: blue;'>Arquivo excluído com sucesso</p>";
    header("location: mod04-9-Exe-1-index.php");
}