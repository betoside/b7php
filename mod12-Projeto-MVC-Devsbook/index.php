<p>
    <strong>Folder:</strong> mod12-Projeto-MVC-Devsbook
    <br>
    <small>50 aulas</small>
    <br>
    <small>http://localhost:8888/B7Web-PHP/mod12-Projeto-MVC-Devsbook/</small>
</p>
<h1># Módulo 12: Projeto Prático em MVC (Devsbook)</h1>

<ul>
    <li>

        <hr>
        <h2>1: Explicando o Projeto</h2>

    </li>
    <li>

        <hr>
        <h2>2: Idealização do Banco de Dados (1/2)</h2>
        <p>
            1º identificar os passos mais obvios, lista das coisas.
            <br>
            2º agora detalhar cada um dos itens
        </p>

        <pre>
        - users
        -- id
        -- email
        -- password
        -- name
        -- birthday
        -- city
        -- work
        -- avatar
        -- cover
        -- token
            o usuario fez um login, gera um hash random, 
            salva no BD associado ao user e entao salva o hash no cookie ou sessao
            em algum lugar associado ao navegador do user pq ele vai navegar e poderá 
            ser facil de ser identificado para acoes futuras

        - userRelations
        -- id 
        -- user_from 
        -- user_to 


        - posts
        -- id 
        -- type (text, photo)
        -- created_at 
        -- body 
        -- like_count (info duplicada p evitar uma consulta ao BD. [postLikes] )

        - postComments
        -- id 
        -- id_post 
        -- id_user 
        -- created_at 
        -- body 

        - postLikes
        -- id 
        -- id_post 
        -- id_user 
        -- created_at 
        </pre>

    </li>
    <li>

        <hr>
        <h2>3: Idealização do Banco de Dados (2/2)</h2>

    </li>
    <li>

        <hr>
        <h2>4: Criação do banco de dados</h2>

    </li>
    <li>

        <hr>
        <h2>5: Baixando e Configurando o MVC</h2>
        <p>
            <a href="https://github.com/suporteb7web/mvc" target="_blank">https://github.com/suporteb7web/mvc</a>
        </p>
        <p>
            <strong>.htaccess</strong>
            <br>
            RewriteCond %{REQUEST_FILENAME} !-f
            <br>
            RewriteCond %{REQUEST_FILENAME} !-d
            <br>
            RewriteCond %{REQUEST_FILENAME} !-l
        </p>

        <p>
            <strong>index.php</strong>: session_start();
        </p>

        <p> 
            <strong>config.php</strong>
            <br>
            const BASE_DIR = '/B7Web-PHP/mod12-Projeto-MVC-Devsbook/devsbook/public';

            <br>
            const DB_DRIVER = 'mysql';
            <br>
            const DB_HOST = 'localhost';
            <br>
            const DB_DATABASE = 'devsbook';
            <br>
            CONST DB_USER = 'root';
            <br>
            const DB_PASS = 'root';
        </p>

        <p>
            Vá até a pasta do projeto, pelo *prompt/terminal* e execute:
            <br>
            > composer install
        </p>

    </li>
    <li>

        <hr>
        <h2>6: Detectando Login (1/2)</h2>
        <pre>
            1. verificar se esta logado, se tem um token na sessao
            2. validar a sessao, ou seja, se o token esta associado a algum user,
             o user pode ter logado em outro computer etc.
             Se ok/passou, o user acessa qq tela do sistema
             Se nao manda o cara p o login

             middleware de verificação de login, se nao existir entao montar 1.

             
            
        </pre>

    </li>
    <li>

        <hr>
        <h2>7: Detectando Login (2/2)</h2>

    </li>
    <li>

        <hr>
        <h2>8: Página de Login (1/2)</h2>

    </li>
    <li>

        <hr>
        <h2>9: Página de Login (2/2)</h2>

    </li>
    <li>

        <hr>
        <h2>10: Página de Cadastro (1/2)</h2>
        <pre>
            ... 
        </pre>

    </li>
    <li>

        <hr>
        <h2>11: Página de Cadastro (2/2)</h2>

    </li>
    <li>

        <hr>
        <h2>12: Página Home (parte 1)</h2>

    </li>
    <li>

        <hr>
        <h2>13: Página Home (parte 2)</h2>

    </li>
    <li>

        <hr>
        <h2>14: Corrigindo 2 bugs</h2>

    </li>
    <li>

        <hr>
        <h2>15: Separar Feed e Feed Editor</h2>

    </li>
    <li>

        <hr>
        <h2>16: Feed Editor (1/2)</h2>

    </li>
    <li>

        <hr>
        <h2>17: Feed Editor (2/2)</h2>

    </li>
    <li>

        <hr>
        <h2>18: Feed (parte 1)</h2>

    </li>
    <li>

        <hr>
        <h2>19: Feed (parte 2)</h2>

    </li>
    <li>

        <hr>
        <h2>20: Feed (parte 3)</h2>

    </li>
    <li>

        <hr>
        <h2>21: Feed (parte 4)</h2>

    </li>
    <li>

        <hr>
        <h2>22: Perfil (parte 1) - Rota</h2>

    </li>
    <li>

        <hr>
        <h2>23: Perfil (parte 2) - Menu</h2>

    </li>
    <li>

        <hr>
        <h2>24: Perfil (parte 3) - Conteúdo Base</h2>

    </li>
    <li>

        <hr>
        <h2>25: Perfil (parte 4) - Conteúdo Específico</h2>

    </li>
    <li>

        <hr>
        <h2>26: Perfil (parte 5) - Conteúdo Específico</h2>

    </li>
    <li>

        <hr>
        <h2>27: Perfil (parte 6) - Feed</h2>

    </li>
    <li>

        <hr>
        <h2>28: Perfil (parte 7) - Feed</h2>

    </li>
    <li>

        <hr>
        <h2>29: Sair</h2>

    </li>
    <li>

        <hr>
        <h2>30: Perfil (parte 8) - Follow</h2>

    </li>
    <li>

        <hr>
        <h2>31: Perfil (parte 9) - Follow</h2>

    </li>
    <li>

        <hr>
        <h2>32: Amigos (1/2)</h2>

    </li>
    <li>

        <hr>
        <h2>33: Amigos (2/2)</h2>

    </li>
    <li>

        <hr>
        <h2>34: Fotos</h2>

    </li>
    <li>

        <hr>
        <h2>35: Partial do Perfil</h2>

    </li>
    <li>

        <hr>
        <h2>36: Busca</h2>

    </li>
    <li>

        <hr>
        <h2>37: Configurações</h2>

    </li>
    <li>

        <hr>
        <h2>38: Configurações: Troca de Avatar/Capa</h2>

    </li>
    <li>

        <hr>
        <h2>39: Like (1/3)</h2>

    </li>
    <li>

        <hr>
        <h2>40: Like (2/3)</h2>

    </li>
    <li>

        <hr>
        <h2>41: Like (3/3)</h2>

    </li>
    <li>

        <hr>
        <h2>42: Comentários (1/2)</h2>

    </li>
    <li>

        <hr>
        <h2>43: Comentários (2/2)</h2>

    </li>
    <li>

        <hr>
        <h2>44: Upload de Fotos (1/3)</h2>

    </li>
    <li>

        <hr>
        <h2>45: Upload de Fotos (2/3)</h2>

    </li>
    <li>

        <hr>
        <h2>46: Upload de Fotos (3/3)</h2>

    </li>
    <li>

        <hr>
        <h2>47: Detalhes do Feed (1/3)</h2>

    </li>
    <li>

        <hr>
        <h2>48: Detalhes do Feed (2/3)</h2>

    </li>
    <li>

        <hr>
        <h2>49: Detalhes do Feed (3/3)</h2>

    </li>
    <li>

        <hr>
        <h2>50: Bug do Banner</h2>

    </li>

</ul>
        