<?php

$googleFunction = "array_search";
$searchingForName = "Anna";

$girlNames = array("Mari", "Liisa", "Anna", "Kati", "Laura", "Marta", "Kristiina", "Helena");

if ($googleFunction($searchingForName, $girlNames) !== false) {
    echo "<div class='alert alert-success' role='alert'>Nimi on olemas!</div>";
} else {
    echo "<div class='alert alert-danger' role='alert'>Nime ei leitud!</div>";
}

?>