<?php
echo '<pre>';
print_r($_FILES);

$tipoArquivosPermitidos = ['image/jpeg','image/jpg','image/png','image/gif'];

if ( in_array($_FILES[arquivo][type], $tipoArquivosPermitidos) ) {

    // $nome = $_FILES[arquivo][name];
    $nome = md5(time().rand(0,1000)).'.jpg';
    move_uploaded_file($_FILES[arquivo][tmp_name], 'mod04-12-Upload-de-arquivos/'.$nome);
    echo 'Arquivo salvo com sucesso';

} else {

    echo 'Arquivo não permitido';

}



/*
Array
(
    [arquivo] => Array
        (
            [name] => mastiga wheeling 1.jpeg
            [type] => image/jpeg
            [tmp_name] => /Applications/MAMP/tmp/php/phpCj42QX
            [error] => 0
            [size] => 182477
        )

)
*/ 