<?php
require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if ($method === 'put') {

    // como identificar uma requisicao PUT?
    parse_str(file_get_contents('php://input'), $input); // método raiz, rs

    // posso fazer isso, before php 7.4
    // $id = (!empty($input['id'])) ? $input['id'] : null;

    // ou, se estiver usando php 7.4.+
    $id = $input['id'] ?? null;
    $title = $input['title'] ?? null;
    $body = $input['body'] ?? null;

    $id = filter_var($id);
    $title = filter_var($title);
    $body = filter_var($body);


    if ($id && $title && $body) {
        
        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {

            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $sql = $pdo->prepare("UPDATE notes SET title = :title, body = :body WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->bindValue(':title', $title);
            $sql->bindValue(':body', $body);
            $sql->execute();

            $array['result'] = [
                'id' => $id,
                'title' => $title,
                'body' => $body
            ];

        } else {
            $array['error'] = 'ID inexiste';
        }

    } else {
        $array['error'] = 'Dados [id, title, body] não enviados';
    }    

} else {
    $array['error'] = 'Método não permitido (apenas PUT)';
}

require('../return.php');
