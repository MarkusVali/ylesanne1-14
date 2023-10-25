<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        // Ülesanne 2 | Markus Väli | 03/10/2023
        echo "<br>";

        $num1 = 5;
        $num2 = 3;
        echo "2.1 <br>";
        echo "Numbrid on: $num1 ja $num2"."<br>";
        echo "Liitmine: ".$num1 + $num2."<br>";
        echo "Lahutamine: ".$num1 - $num2."<br>";
        echo "Korrutamine: ".$num1 * $num2."<br>";
        echo "Jagamine: ".$num1 / $num2."<br>";
        echo "Jääk: ".$num1 % $num2."<br>";

        $millimeters = 1551;
        $centimeters = $millimeters / 10;
        $meters = $millimeters / 1000;
        echo "2.2 <br>";
        echo "Current millimeters: $millimeters<br>";
        echo "Current millimeters in centimeters: ".round($centimeters, 2)."<br>";
        echo "Current millimeters in meters: ".round($meters, 2)."<br>";

        $a = 5;
        $b = 4;
        $c = round(sqrt(pow($a, 2) + pow($b, 2)));
        echo "2.3 <br>";
        echo "Selle kolmnurga andmed on: a = $a, b = $b ja c = $c <br>";
        echo "Selle kolmnurga ümbermõõt on: ".$a + $b + $c."<br>";
        echo "Selle kolmnurga pindala on: ".round($a * $b / 2);
    ?>
</body>
</html>