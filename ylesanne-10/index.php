<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dünaamiline veebileht</title>
</head>
<body>
    <h1>Tere tulemast!</h1>
    <ul>
        <li><a href="page1.php">Leht 1</a></li>
        <li><a href="page2.php">Leht 2</a></li>
        <li><a href="page3.php">Leht 3</a></li>
    </ul>

    <?php
    session_start();
    if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
        header("Location: login.php");
        exit();
    }
    ?>
    </body>
</html>