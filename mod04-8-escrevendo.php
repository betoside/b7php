<?php
$texto = file_get_contents('mod04-8-new.html');
$texto .= "\n\nMúsica Legal!";
file_put_contents('mod04-8-new.html', $texto);
echo "Conteúdo atualizado com sucesso: ";
echo "<br>";
echo "<a href='mod04-8-new.html'>mod04-8-new.html?at=1</a>";