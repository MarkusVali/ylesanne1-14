<?php
function genereeri_lause() {
    $alus = ["Ilus", "Päikeseline", "Rõõmus"];
    $oeldis = ["jookseb", "naerab", "õpib"];
    $sihitis = ["pargis", "koolis", "raamatukogus"];

    $valitud_alus = $alus[array_rand($alus)];
    $valitud_oeldis = $oeldis[array_rand($oeldis)];
    $valitud_sihitis = $sihitis[array_rand($sihitis)];

    $lause = "$valitud_alus $valitud_oeldis $valitud_sihitis.";

    return $lause;
}

$lause = genereeri_lause();
echo $lause;
?>