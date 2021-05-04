<?php
require('../config.php');

// 1ª coisa, verificar se o método foi o metodo correto
$method = strtolower($_SERVER['REQUEST_METHOD']);

if ($method === 'get') {

    $sql = $pdo->query("SELECT * FROM notes");
    if ($sql->rowCount() > 0) {
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach ($data as $item) {
            $array['result'][] = [
                'id' => $item['id'],
                'title' => $item['title'],
                'body' => $item['body']
            ];
        }

    } else {
        # code...
    }
    

} else {
    $array['error'] = 'Método não permitido (apenas GET)';
}

require('../return.php');