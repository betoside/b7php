<h1>#24: SOLID: I - Princípio da Segregação da Interface</h1>
<h3>I - interfacesegregation principle (principio da segregacao da interface)</h3>
<p><sub>mod07-24-SOLID-I-Princ-da-Segregacao-da-Interface.php</sub></p>


<pre>
interface Aves {
    public function setLocation($lat, $long);
    public function render();
}
interface AvesQueVoam extends Aves {
    public function setAltitude($lat);
}
class Papagaio implements AvesQueVoam {
    public function setLocation($lat, $long) {}
    public function setAltitude($lat) {}
    public function render() {}
}
class Pinguim implements Aves {
    public function setLocation($lat, $long) {}
    // public function setAltitude($lat) {} // VIOLACAO DO PRINCIPIO PQ PINGUIM NAO VOA
    public function render() {}
}

// A INTENCAO É BOA MAS 
// o principio diz que a interface
// tem que ter apenas os metodos essenciais e que vao ser utilizados 
// pela class que esta implementando eles

// como resolver, e fazer correto?
// Extender a interface aves

function qqfnc (AvesQueVoam $ave) {
    $ave->render();
}
function qqfnc (Aves $ave) {
    $ave->render();
}


S - single responsibility (principio da responsabilidade única)
O - open-closed principle (principio aberto-fechado)
L - liskov substitution principle (principio da substituicao de liskov)
<strong>I - interfacesegregation principle (principio da segregacao da interface)</strong>
D - dependency inversion principle (principio da inversao da dependencia)

</pre>
