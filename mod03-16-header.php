
<h1>Cabeçalho</h1>
<?php

if (isset($_COOKIE['nome'])) {
// if ($_COOKIE['nome']) {
    $nome = $_COOKIE['nome'];
    echo "<strong>cookie:</strong> $nome (<a href='mod04-5-Cookies-apagar.php'>Apagar cookie</a>)";
    // echo "<br>";
    // echo "<a href='mod04-5-Cookies-apagar.php'>Apagar cookie</a>";
}
?>

<hr>
<br><br>
