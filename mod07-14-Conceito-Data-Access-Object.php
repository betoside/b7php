<h1>#14: Conceito Data Access Object (DAO)</h1>
<p><sub>mod07-14-Conceito-Data-Access-Object.php</sub></p>
<h3>CLASSE USUARIO</h3>
<p>
    - nome
    <br>
    - email
</p>
<p>
    - id
    <br>
    - getid
    <br>
    - setid
</p>
<p>
    - getnome
    <br>
    - setnome
</p>
<p>
    - getemail
    <br>
    - setemail
</p>

<h3>CLASSE USUARIODAO</h3>
<p>- insert(nome, email)   [nao fazer assim, desaconselhado]</p>

<h5>PASSO 1 PARA ADD USUARIO NOVO</h5>
<p>- Cria a classe do novo usuario</p>
<p>
    $usuario = new Usuario();
    <br>
    $usuario->setNome('Fulano');
    <br>
    $usuario->setEmail('fulano@hotmail.com');
    <br>
    <br>
    $usuarioDAO->insert($usuario);
</p>

<p>
    Em outras palavras, o DAO é muito teórico
    <br>
    conceito geral: 
</p>
<pre>
    tem q ter uma classe para o item que vc esta manipulando
    vc tem q ter uma outra classe especifica para fazer intermediacao entre o 
    banco de dados e a classe do item.
</pre>

<ol>
    <li>crio o objeto do usuario a ser adicionado</li>
    <li>mando o objeto para o intermediario (pode ser qq tipo, para sql, postgree ou oracle, etc)</li>
    <li>o intermediario faz a comunicao com o banco de dados</li>
</ol>


<p>
    dessa forma eu separo a comunicao com o banco de dados da aplicacao como um todo,
    <br>
    dessa forma facilito a manutencao.
    <br>
    isso vai criar mais codigo mas com o DAO implementado vc 
    <br>
    pode mudar totalmente a 
    estrutura de banco de dados 
    <br>
    e vc vai manter o mesmo sistema e vai alterar um arquivo ou outro.
</p>
