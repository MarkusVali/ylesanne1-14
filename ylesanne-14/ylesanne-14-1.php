<?php
$directory = "images";

$images = glob($directory . "/*.jpg");

if (!empty($images)) {
    $randomImage = $images[array_rand($images)];
    echo '<img src="'.$randomImage.'" alt="Suvaline pilt">';
} else {
    echo "Kataloogis pole .jpg formaadis pilte.";
}
?>