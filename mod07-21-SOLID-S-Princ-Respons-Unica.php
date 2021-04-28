<h1>#21: SOLID: S - Princípio da Responsabilidade Única</h1>
<h3>S - single responsibility (principio da responsabilidade única)</h3>
<p><sub>mod07-21-SOLID-S-Princ-Respons-Unica.php</sub></p>

<pre>

toda class deve ter apenas uma responsabilidade, nao deve ter muitas resposabilidades

class Usuario {
    
    // reponsabilidade #1 - gerenciador do proprio usuario
    public function setNome() {}
    public function getNome() {}
    // email
    // senha

    // reponsabilidade #2 - metodos relacionados a manipulacao no banco de dados
    public function add() {}
    public function update() {}
    public function delete() {}
}
// isso viola o principio
Aqui temos falta de coesao, serve pra tudo e nao serve pra nada
auto acoplamento
o codigo tende a ficar maior, cada vez mais
quando se esta usando MVC é fácil caminhar para isso, para essa violação, tomar cuidado


Pode resolver assim:
class Usuario { // objeto do proprio user, so coisa do user
    
    public function setNome() {}
    public function getNome() {}

}

class UsuarioDB { // esse cara so para manipulacao de dados do user
    
    public function add(Usuario $u) {} // aqui é a forma de juntar as class, por injecao de dependencia
    public function update(Usuario $u) {}
    public function delete($id) {}

}
// os dois estao de certa forma interligados entao pode-se fazer isso



S - single responsibility (principio da responsabilidade única)
O - open-closed principle (principio aberto-fechado)
L - liskov substitution principle (principio da substituicao de liskov)
I - interfacesegregation principle (principio da segregacao da interface)
D - dependency inversion principle (principio da inversao da dependencia)


</pre>


