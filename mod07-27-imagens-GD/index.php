<h1>#27: Manipulação de imagens com GD</h1>

<?php
// criei img
$imagem = imagecreatetruecolor(300,300);

// preenchi de vermelho
$cor = imagecolorallocate($imagem, 255, 0, 0);
imagefill($imagem, 0, 0, $cor);

// mostrando na tela
// header("Content-Type: image/jpeg");
// imagejpeg($imagem, null, 100);
// imagejpeg($imagem, 'nova_imagem.jpg', 100);

imagejpeg($imagem, 'nova_imagem.png');