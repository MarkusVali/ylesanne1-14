<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapetsi Pindala ja Rombi Ümbermõõt</title>
</head>
<body>

<h1>Trapetsi Pindala ja Rombi Ümbermõõt</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Trapetsi kõrgus: <input type="text" name="trapezoidHeight"><br>
    Ülemine alus: <input type="text" name="topBase"><br>
    Alumine alus: <input type="text" name="bottomBase"><br>
    Rombi külg: <input type="text" name="rhombusEdge"><br>
    <input type="submit" name="submit" value="Arvuta">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $trapezoidHeight = $_POST["trapezoidHeight"];
    $topBase = $_POST["topBase"];
    $bottomBase = $_POST["bottomBase"];
    $rhombusEdge = $_POST["rhombusEdge"];

    $trapezoidArea = ($topBase + $bottomBase) * $trapezoidHeight / 2;

    $rhombusPerimeter = 4 * $rhombusEdge;

    echo "<h2>Tulemused:</h2>";
    echo "Trapetsi pindala on: " . round($trapezoidArea, 1) . " ruutühikut<br>";
    echo "Rombi ümbermõõt on: " . round($rhombusPerimeter, 1) . " ühikut";
}
?>

</body>
</html>
