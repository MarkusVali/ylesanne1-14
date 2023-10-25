<?php
function ristkyliku_pindala($pikkus, $laius) {
    $pindala = $pikkus * $laius;
    return $pindala;
}

$pikkus = 5;
$laius = 8;
$pindala = ristkyliku_pindala($pikkus, $laius);
echo "Ristküliku pindala on $pindala ruutühikut.";
?>