<?php
$file = fopen('andmefail.txt', 'r');

if ($file) {
    $content = fread($file, filesize('andmefail.txt'));
    $content = nl2br($content);
    fclose($file);
    echo $content;
} else {
    echo "Faili avamine ebaõnnestus.";
}
?>
