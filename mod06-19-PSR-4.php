<h2>
mod06-19-PSR-4.php
</h2>

<?php
require 'Mod06_19_autoload.php';

$m = new matematica\Mod06_19_basica();
// echo "teste";
echo 'echo $m->somar(11, 20): ';
echo $m->somar(11, 20);

echo '<hr>';
$fotografia = new foto\Mod06_19_upload();
echo 'echo $fotografia->enviar(): '.$fotografia->enviar();



/*
mod06-19-PSR-4.php
    mod06_19_PSR_4_classes FOLDER
        matematica
            Mod06_19_basica.php
        foto
            Mod06_19_upload.php

    Mod06_19_autoload.php

mod06-20-Intro-Ger-Dependencias.php
mod06-21-Composer-0.php
mod06-22-Composer-1.php
mod06-23-Composer-2.php
*/ 
?>