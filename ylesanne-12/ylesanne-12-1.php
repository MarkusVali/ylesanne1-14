<!DOCTYPE html>
<html>
<head>
    <title>Sõiduaeg</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];

    if (empty($start_time) || empty($end_time)) {
        echo "Mõlemad väljad peavad olema täidetud.";
    } else if (strlen($start_time) < 5 || strlen($end_time) < 5) {
        echo "Aeg peab olema vähemalt viie sümboli pikkune (hh:mm).";
    } else {
        $start = strtotime($start_time);
        $end = strtotime($end_time);

        if ($end < $start) {
            $end = strtotime($end_time . ' +1 day');
        }

        $diff = $end - $start;
        $hours = floor($diff / 3600);
        $minutes = floor(($diff % 3600) / 60);

        echo "Sõiduaeg: $hours tundi $minutes minutit.";
    }
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Start aeg (hh:mm): <input type="text" name="start_time"><br>
    Lõpu aeg (hh:mm): <input type="text" name="end_time"><br>
    <input type="submit" value="Arvuta sõiduaeg">
</form>

</body>
</html>
