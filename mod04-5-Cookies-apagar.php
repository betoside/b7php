<?php

setcookie('nome','', time() - 3600);

header("Location: mod04-2-Pegando-informacoes-do-formulario.php");
exit;