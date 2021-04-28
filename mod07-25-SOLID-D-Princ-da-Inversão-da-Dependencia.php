<h1>#25: SOLID: D - Princípio da Inversão da Dependência</h1>
<h3>D - dependency inversion principle (principio da inversao da dependencia)</h3>
<p><sub>mod07-25-SOLID-D-Princ-da-Inversão-da-Dependencia.php</sub></p>


<pre>

normal//e confundido com injeçao de dependencia apesar de trabalhar com isso tb

    class MYSQLConnection {
        public function connect(){}
    }

errado:

    class UsuarioDAO {
        public function __construct() {
            $this->new MYSQLConnection(); // ao inves de instanciar assim
        }
    }

consertando:

    class UsuarioDAO {
        public function __construct(MYSQLConnection $dbCon) { // recebe a instancia no construtor
            $this->db = $dbCon;
        }
    }

Na implementacao:

    $dbCon = new MYSQLConnection(...);

    $usuarioDAO = new UsuarioDAO( $dbCon );
    $usuario2DAO = new UsuarioDAO( $dbCon );
    // passando a mesma conexao para ambos,
    // nao gera duas conexoes

mas isso nao é o principio da inversao de dependencia
isso é injecao de dependencia

    interface DBConnection {
        public function connect();
    }

    class MYSQLConnection implements DBConnection {
        public function connect(){}
    }

    class OracleConnection implements DBConnection {
        public function connect(){}
    }

    class MongoDBConnection implements DBConnection {
        public function connect(){}
    }

    class UsuarioDAO {
        private $db;

        public function __construct(MYSQLConnection $dbCon) {
            $this->db = $dbCon;
        }
    }

    $dbCon = new MYSQLConnection(...);
    $dbCon = new OracleConnection(...);
    $dbCon = new MongoDBConnection(...);

    $usuarioDAO = new UsuarioDAO( $dbCon );
    $usuario2DAO = new UsuarioDAO( $dbCon );


Resumo:
vc usa qdo precisa ter varios tipos de dependencia na class e 
eventualmente vc pode modificar quem é que essa class vai receber
nesse caso cria-se uma interface e usa essa interface como pre requisito
para receber a dependencia




S - single responsibility (principio da responsabilidade única)
O - open-closed principle (principio aberto-fechado)
L - liskov substitution principle (principio da substituicao de liskov)
I - interfacesegregation principle (principio da segregacao da interface)
<strong>D - dependency inversion principle (principio da inversao da dependencia)</strong>

</pre>
