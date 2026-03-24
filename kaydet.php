<?php

$ad = $_POST["ad"];
$yorum = $_POST["yorum"];

if(empty($ad) || empty($yorum)){
    echo "Lütfen tüm alanları doldurun!";
} else {
    $veri = $ad . ": " . $yorum . "\n";
    file_put_contents("yorumlar.txt", $veri, FILE_APPEND);
    echo "Yorum kaydedildi!";
}

?>