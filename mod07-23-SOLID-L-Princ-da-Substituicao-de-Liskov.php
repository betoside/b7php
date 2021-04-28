<h1>#23: SOLID: L - Princípio da Substituição de Liskov</h1>
<h3>L - liskov substitution principle (principio da substituicao de liskov)</h3>
<p><sub>mod07-22-SOLID-O-Princ-Aberto-Fechado.php</sub></p>

<pre>
Barbara Liskov, criadora, apresentou esse principio numa palestra

definicao oficial: #$%ˆ&*  :)

>> DEFINICAO PRATICA

class A {
    public function getNome() {
        return "Meu nome é A";
    }
}
class B extends A {
    public function getNome() {
        return "Meu nome é B";
    }
}


function imprimeNome(A $obj) {
    return $obj->getNome();
}

$objeto1 = new A();
echo imprimeNome($objeto1);

$objeto2 = new B();
echo imprimeNome($objeto1)."<br>";
echo imprimeNome($objeto2);



S - single responsibility (principio da responsabilidade única)
O - open-closed principle (principio aberto-fechado)
L - liskov substitution principle (principio da substituicao de liskov)
I - interfacesegregation principle (principio da segregacao da interface)
D - dependency inversion principle (principio da inversao da dependencia)


</pre>


