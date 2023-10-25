<?php
$data = [
    'Nimi' => 'John Doe',
    'Email' => 'johndoe@tthk.ee',
    'Vanus' => 30,
    'Hobi' => 'Jalgrattasõit'
];

$file = fopen('andmefail.txt', 'w');

if ($file) {
    foreach ($data as $key => $value) {
        fwrite($file, "$key: $value\n");
    }

    fclose($file);
    echo "Andmed on faili salvestatud.";
} else {
    echo "Faili avamine ebaõnnestus.";
}
?>
