<h1>#22: SOLID: O - Princípio Aberto-Fechado</h1>
<h3>O - open-closed principle (principio aberto-fechado)</h3>
<p><sub>mod07-22-SOLID-O-Princ-Aberto-Fechado.php</sub></p>

<pre>
talvez seja o mais simples

objetos, classe ou entidades devem estar abertas para extensao 
possivel de se extender ou aumentar a funcionalidade dela
mas fechadas para modificacao

>> exemplo de class ERRADA:

class ContratoClt {
    public function calcularSalario() {}
}
class Estagio {
    public function bolsaAuxilio() {}
}
class ContratoPj {
    public function calcularPagamento() {}
}

class FolhaDePagamento {

    public function calcular( $funcionario ) {
        if($funcionario instanceOf ContratoClt) {
            $salario = $funcionario->calcularSalario();
        } elseif ($funcionario instanceOf Estagio) {
            $salario = $funcionario->bolsaAuxilio();
        } elseif ($funcionario instanceOf ContratoPj) {
            $salario = $funcionario->calcularPagamento();
        }

        return $salario;
    }
}



>> exemplo de class SOLUCAO: criar uma interface

interface Remuneravel {
    public function remuneracao();
}

class ContratoClt implements Remuneravel {
    public function remuneracao () {
        ... calculo
    }
}
class Estagio implements Remuneravel {
    public function remuneracao () {
        ... calculo
    }
}
class ContratoPj implements Remuneravel {
    public function remuneracao () {
        ... calculo
    }
}
class ContratoInternacional implements Remuneravel { // vai que existe ou inventam
    public function remuneracao () {
        ... pronto, criei uma nova classe 
        para um novo tipo de contrato
        usando a interface
        seguindo o principio aberto p a extensao
        fazendo quantos tipos de contrato quiser
        desde que use a interface basica
        fechado para modificacao pq nao vai precisar
        alterar nada na classe para adicionar um novo tipo de contrato
    }
}

class FolhaDePagamento {

    public function calcular( $funcionario ) {
        if($funcionario instanceOf ContratoClt) {
            return $funcionario->remuneracao();
        }
    }
}


S - single responsibility (principio da responsabilidade única)
O - open-closed principle (principio aberto-fechado)
L - liskov substitution principle (principio da substituicao de liskov)
I - interfacesegregation principle (principio da segregacao da interface)
D - dependency inversion principle (principio da inversao da dependencia)


</pre>


