<h1>#28: GD: Resize</h1>
<p>mod07-28-GD-Resize.php</p>

<?php

$arquivo = 'rincon.jpg';
$maxWidth = 500;
$maxHeight = 500;

$info = getimagesize($arquivo);

echo "<pre>";
print_r($info);

echo "<hr>";

list($originalWidth,  $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;

$ratioDest = $maxWidth / $maxHeight;

if ($ratioDest > $ratio) {
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
} else {
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}

echo 'Proporção: '.$finalWidth.' - '.$finalHeight;

$imagem = imagecreatetruecolor($finalWidth, $finalHeight);
$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled(
    $imagem, 
    $originalImg,
    0, 0, 0, 0,
    $finalWidth, $finalHeight,
    $originalWidth,  $originalHeight
);

// header('Content-Type: image/jpeg');
// imagejpeg($imagem, null, 100);
imagejpeg($imagem, 'rincon_nova.jpg', 100);
