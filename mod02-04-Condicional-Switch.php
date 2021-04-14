<?php 

$tipo = 'foto';

if ($tipo == 'foto') {
    echo 'Exibindo uma foto';
}
if ($tipo == 'video') {
    echo 'Exibindo um video';
}
if ($tipo == 'texto') {
    echo 'Exibindo um texto';
}

echo '<br>';

switch ($tipo) {
    
    case 'foto':
        echo 'Exibindo FOTO';
        break;
    
    case 'video':
        echo 'Exibindo VIDEO';
        break;
        
    case 'texto':
        echo 'Exibindo TEXTO';
        break;
    
    default:
        # code...
        break;
}

// obs: 
// switch nao eh tao utilizado, if eh 90% + utilizado.

// switch eh utilizado quando vc tem 1 variavel para algumas condicoes



?>