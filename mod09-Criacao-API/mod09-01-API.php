
<h1>Módulo 9: Criacao de APIs</h1>

<ul>
    <li>
        <h2>1: O que é uma API?</h2>
        <p>
            <strong>CLIENTE</strong>
            pode ser um navegador, um aplicativo, uma geladeira que se comunica c a internet
            alguem que faz uma requisicao para algum lugar do mundo
            qq coisa q tenha acesso a internet, plaquinha de arduino, celular, equipamento de radio
        </p>

        <p><strong>SERVIDOR</strong> recebe a requisicao, processa a informacao e devolve a resposta</p>

        <p>
            <strong>API</strong> é um sistema que nao tem a parte gráfica
            <br>
            retorna as informacoes
            <br>
            a parte gráfica quem gera é o aplicativo ou o site.
        </p>

        <p>
            <strong>API:</strong> <a target="_blank" href="https://api.b7web.com.br/ping/">https://api.b7web.com.br/ping/</a>
        </p>
        <p>
            <strong>API:</strong> <a target="_blank" href="https://api.b7web.com.br/cinema/">https://api.b7web.com.br/cinema/</a>
        </p>
    </li>
    <li>
        <h2>2: Estrutura de uma API</h2>
        <br>
        <pre>
        Processos:

        REQUISICAO: 
        - igual o acesso a um site normal
        - GET, POST, PUT, DELETE, OPTIONS (informar o objetivo)
        - Cabeçalhos (você pode enviar)

        RETORNO, pode ser
        - texto puro (sim, nao, 0, 1, ou seja, respostas muito simples funcionam bem com texto puro) 
        - XML
        - JSON
        <p>
            <a href="http://jsonviewer.stack.hu/" target='_blank'>http://jsonviewer.stack.hu/</a>
            <br>
            <a href="https://resttesttest.com/" target='_blank'>https://resttesttest.com/</a>
        </p>
        </pre>

    </li>
    <li>
        <h2>3: DevsNotes API: Planejamento</h2>
        <pre>
        DEVSNOTES: (sistema de anotações simples)

        O que o projeto precisa fazer?
        - Listar as anotações
        - Pegar infomações de UMA anotação
        - Inserir uma anotação nova
        - Atualizar uma anotação
        - Deletar uma anotação

        Qual a estrutura de dados?
        - local para armazenar as anotações
        -- id
        -- title
        -- body

        Quais os endpoints?
        - (METODO) / url (PARÂMETROS) sintaxe:
        - (GET) /api/notes
        - (GET) /api/note/123 
        - (POST) /api/note (title, body)
        - (PUT) /api/note/123 (title, body) [método mudou]
        - (DELETE) /api/note/123 [método mudou]
        </pre>

    </li>
    <li>
        <h2>4: DevsNotes API: Banco de Dados</h2>
        <p>
            <strong>Banco de dados:</strong> devsnotes
        </p>
        <p>
            id
            <br>
            title
            <br>
            body
        </p>
        
    </li>
    <li>
        <h2>5: DevsNotes API (estrutural): Introdução</h2>
        <p>
            API de forma fácil, simples e funcional
        </p>
        <p>
            1ª vez será com php estrutural
            <br>
            será necessário criar arquivos separados
            <br>
        </p>
        <pre>
        Quais os endpoints?
        - (METODO) / url (PARÂMETROS) sintaxe:
        - (GET) /api/notes -> /api/getall.php 
        - (GET) /api/note/123 -> /api/get.php?id=123
        - (POST) /api/note -> /api/insert.php (title, body)
        - (PUT) /api/note/123 -> /api/update.php (id, title, body)
        - (DELETE) /api/note/123 -> /api/delete.php (id)
        </pre>

    </li>
    <li>
        <h2>6: DevsNotes API (estrutural): Base</h2>
        <p>1ª coisa que aprendemos: criar um array para retornar algo: um JSON</p>
        <p>
            <a href="api/ping.php">ping.php</a>
            <br>
            usar o site <a href="https://resttesttest.com/" target="_blank">https://resttesttest.com/</a>
            <br>
            <strong>Result</strong>: has been blocked by CORS policy
        </p>
        <p>
            <h4>Alterar o header para solucionar</h4>
            <pre>
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
            header("Content-Type: application/json");
            </pre>
        </p>
        <p>
            <strong>OBS:</strong> clear console
            <br>
            Run test again
        </p>
    </li>
    <li>
        <h2>7: DevsNotes API (estrutural): Getall</h2>
        <a href="api/getall.php">getall.php</a>
        <p>
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        </p>
        <p>
        <a href="http://jsonviewer.stack.hu" target="_blank">http://jsonviewer.stack.hu</a>
        </p>


        <pre>
        Quais os endpoints?
        - (GET) /api/notes -> /api/getall.php 
        </pre>

        <p>
        Quais os endpoints?
        <br>
        - (METODO) / url (PARÂMETROS) sintaxe:
        <br>
        <strong>- (GET) /api/notes -> /api/getall.php </strong>
        </p>
    </li>
    <li>
        <h2>8: DevsNotes API (estrutural): Get</h2>
        <a href="api/get.php">get.php</a>

        <pre>
        Quais os endpoints?
        - (GET) /api/note/123 -> /api/get.php?id=123 (id)
        </pre>
    </li>
    <li>
        <a href="mod09-09-DevsNotes-Insert.php">mod09-09-DevsNotes-Insert.php</a>
    </li>
    <li>
        <a href="mod09-10-DevsNotes-Update.php">mod09-10-DevsNotes-Update.php</a>
    </li>
    <li>
        <a href="mod09-11-DevsNotes-Delete.php">mod09-11-DevsNotes-Delete.php</a>
    </li>
</ul>





<?php
