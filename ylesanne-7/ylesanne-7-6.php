<?php
function kontrolli_isikukoodi($isikukood) {
    if(strlen($isikukood) == 11) {
        return true;
    } else {
        return false;
    }
}

function leia_sugu_sunniaeg($isikukood) {
    $sugu = intval(substr($isikukood, 0, 1)) % 2 === 0 ? 'naine' : 'mees';
    $sunniaeg = substr($isikukood, 5, 2) . '.' . substr($isikukood, 3, 2) . '.' . substr($isikukood, 1, 2);
    return array('sugu' => $sugu, 'sunniaeg' => $sunniaeg);
}

$isikukood = "49002010965";

if(kontrolli_isikukoodi($isikukood)) {
    $andmed = leia_sugu_sunniaeg($isikukood);
    echo "Sugu: " . $andmed['sugu'] . "<br>";
    echo "Sünniaeg: " . $andmed['sunniaeg'];
} else {
    echo "Vigane isikukood. Palun sisestage 11-kohaline isikukood.";
}
?>