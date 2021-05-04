<?php
require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if ($method === 'delete') {

    // como identificar uma requisicao PUT?
    parse_str(file_get_contents('php://input'), $input); // método raiz, rs

    // posso fazer isso, before php 7.4
    // $id = (!empty($input['id'])) ? $input['id'] : null;

    // ou, se estiver usando php 7.4.+
    $id = $input['id'] ?? null;

    $id = filter_var($id);


    if ($id) {
        
        // com cerimônia, verificando e mandando msg de erro.
        // $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
        // $sql->bindValue(':id', $id);
        // $sql->execute();

        // if ($sql->rowCount() > 0) {

        //     $data = $sql->fetch(PDO::FETCH_ASSOC);
        //     $sql = $pdo->prepare("DELETE FROM notes WHERE id = :id");
        //     $sql->bindValue(':id', $id);
        //     $sql->execute();

        // } else {
        //     $array['error'] = 'ID inexiste';
        // }


        // mais diretão
        $data = $sql->fetch(PDO::FETCH_ASSOC);
        $sql = $pdo->prepare("DELETE FROM notes WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

    } else {
        $array['error'] = 'ID não enviado';
    }    

} else {
    $array['error'] = 'Método não permitido (apenas DELETE)';
}

require('../return.php');
