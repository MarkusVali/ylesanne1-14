<?php

$salary2018 = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);
$averageSalary2018 = array_sum($salary2018) / count($salary2018);

echo "2018. aasta keskmine palk oli: " . round($averageSalary2018, 2) . " eurot";
?>