<?php
spl_autoload_register(function($class){
    // echo "NOME: ".$class;
    if (file_exists($class.".php")) {
        require $class.".php";
        // require strtolower($class).".php";
        // require "./".$class.".php";
    }
});