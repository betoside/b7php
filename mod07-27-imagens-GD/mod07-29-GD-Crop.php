<h1>#29: GD: Crop</h1>
<p>mod07-29-GD-Crop.php</p>

<?php

$arquivo = 'rincon.jpg';
$width = 300;
$height = 300;

// $info = getimagesize($arquivo);
// echo "<pre>";
// print_r($info);
// echo "<hr>";

list($originalWidth,  $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $width / $height;

$finalWidth = 0;
$finalHeight = 0;
$finalX;
$finalY;

if ($ratioDest > $ratio) {
    $finalWidth = $height * $ratio;
    $finalHeight = $height;
} else {
    $finalHeight = $width / $ratio;
    $finalWidth = $width;
}

if ($finalWidth < $width) {
    $finalWidth = $width;
    $finalHeight = $width / $ratio;
    $finalY = -(($finalHeight - $height) / 2);
} else {
    $finalHeight = $height;
    $finalWidth = $height * $ratio;
    $finalX = -(($finalWidth - $width) / 2);
}

// echo 'Proporção: '.$finalWidth.' - '.$finalHeight;

$imagem = imagecreatetruecolor($width, $height);
$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled(
    $imagem, 
    $originalImg,
    $finalX, $finalY, 0, 0,
    $finalWidth, $finalHeight,
    $originalWidth,  $originalHeight
);

header('Content-Type: image/jpeg');
imagejpeg($imagem, null, 70);
// imagejpeg($imagem, 'rincon_nova.jpg', 100);
