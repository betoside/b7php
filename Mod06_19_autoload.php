<?php

spl_autoload_register(function($class){

    $baseDir = __DIR__.'/mod06_19_PSR_4_classes/';

    // echo "CLASSE NOME: ".$class;
    // echo $baseDir;

    $file = $baseDir.str_replace('\\', '/', $class).'.php';
    // echo $file;
    //   de:                                     mod06_19_PSR_4_classes\matematica
    // para: /Applications/MAMP/htdocs/B7Web-PHP/mod06_19_PSR_4_classes/matematica/basica.php

    if (file_exists($file)) {
        require $file;
    }

});