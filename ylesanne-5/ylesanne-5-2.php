<?php
$girlNames = array("Mari", "Liisa", "Anna", "Kati", "Laura", "Marta", "Kristiina", "Helena");

echo "Tüdruku nimed on: ";

foreach ($girlNames as $name) {
    echo $name . " ";
}

echo "<br>";

echo "Esimene nimi: " . $girlNames[0] . "<br>";
echo "Teine nimi: " . $girlNames[1] . "<br>";
echo "Kolmas nimi: " . $girlNames[2] . "<br>";
echo "Viimane nimi: " . end($girlNames) . "<br>";

$randomIndex = array_rand($girlNames);
echo "Suvaline nimi: " . $girlNames[$randomIndex] . "<br>";
?>