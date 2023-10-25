<?php

$countries = array("Indonesia","Canada","Kyrgyzstan","Germany","Philippines", "Philippines","Canada","Philippines","South Sudan","Brazil", "Democratic Republic of the Congo","Indonesia","Syria","Sweden", "Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France", "Kazakhstan","Cuba","Portugal","Czech Republic");

$longest_length = 0;
$longest_name = '';

foreach ($countries as $country) {
    $length = strlen($country);
    if ($length > $longest_length) {
        $longest_length = $length;
        $longest_name = $country;
    }
}

echo "Kõige pikema riigi nime märkide arv on: " . $longest_length;
echo "<br>";
echo "Kõige pikem riik on: " . $longest_name;

?>