<?php
$file = fopen('andmefail.txt', 'r+');

if ($file) {
    $firstLine = fgets($file);
    $newData = "Telefon: 555-1234\nAadress: 123 Main Street\n";

    fseek($file, 0);
    fwrite($file, $newData . $firstLine);

    fclose($file);
    echo "Andmed on failis muudetud.";
} else {
    echo "Faili avamine ebaõnnestus.";
}
?>
