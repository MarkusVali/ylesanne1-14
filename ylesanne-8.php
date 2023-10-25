<!DOCTYPE html>
<html>
<head>
    <title>Kuupäev ja vanus</title>
</head>
<body>
<?php
$currentDateTime = date('d.m.Y H:i');
echo "Kuupäev ja kellaaeg formaadis $currentDateTime<br>";

$userBirthYear = 1990;

$currentYear = date('Y');
$userAge = $currentYear - $userBirthYear;
echo "Sa oled $userAge aastat vana või saad $userAge-aastaseks sel aastal<br>";

$today = new DateTime();
$schoolYearEndDate = new DateTime(date("Y") . '-05-31');
$interval = $today->diff($schoolYearEndDate);
$daysRemaining = $interval->format('%a');

echo "Käesoleva kooliaasta lõpuni on jäänud $daysRemaining päeva!<br>";

$currentMonth = date('n');
if ($currentMonth >= 3 && $currentMonth <= 5) {
    echo 'Praegu on Kevad!';
} elseif ($currentMonth >= 6 && $currentMonth <= 8) {
    echo 'Praegu on Suvi!';
} elseif ($currentMonth >= 9 && $currentMonth <= 11) {
    echo 'Praegu on Sügis!';
} else {
    echo 'Praegu on Talv!';
}
?>
</body>
</html>