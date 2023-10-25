<?php
function loo_arvude_jarjestus($algus, $lopp, $samm) {
    $arvud = [];
    while ($algus <= $lopp) {
        $arvud[] = $algus;
        $algus += $samm;
    }
    return $arvud;
}

$tulemus1 = loo_arvude_jarjestus(2, 8, 1);
echo implode(', ', $tulemus1);
echo "<br>";

$tulemus2 = loo_arvude_jarjestus(2, 8, 3);
echo implode(', ', $tulemus2);
?>