<h1>
    #26: Encriptação de senhas
</h1>
<p>
    <sub>
        mod07-26-Encriptacao-de-senhas.php
    </sub>
</p>
<p>
    Recomendação oficial do PHP é usar 
    <strong>password_hash</strong>($senha, PASSWORD_BCRYPT) / <strong>password_verify</strong>($senha, $hash)
</p>
<?php
$senha = '1234';
// $hash = password_hash($senha, PASSWORD_DEFAULT);
$hash = password_hash($senha, PASSWORD_BCRYPT);
echo '$senha gera hash: '.$senha;
echo "<br>";
$senha = '1234';
echo '$senha alterada: '.$senha;
echo "<br>";
echo '$hash: '.$hash;
?>
<h3>verficar senha 1</h3>
<?php
if (password_verify($senha, $hash)) {
    echo '$senha/$hash CORRETA com <strong>password_hash</strong>($senha, PASSWORD_BCRYPT) / <strong>password_verify</strong>($senha, $hash)';
} else {
echo '$senha/$hash ERRADA com <strong>password_hash</strong>($senha, PASSWORD_BCRYPT) / <strong>password_verify</strong>($senha, $hash)';
}

echo "<hr>";

$senha3 = "1234";
// $senha3 = "1234.";
// $hash3 = md5($senha3);
$hash3 = "81dc9bdb52d04dc20036dbd8313ed055";
// echo '$hash3: '.$hash3;
echo "<h3>verficar senha 3: md5()</h3>";
if (md5($senha3) == $hash3) {
    echo 'Senha3 $hash3 CORRETA com <strong>md5()</strong>';
} else {
    echo 'Senha3 $hash3 ERRADA com <strong>md5()</strong>';
}



