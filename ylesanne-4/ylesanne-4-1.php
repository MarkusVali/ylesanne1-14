<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jagamine</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Jagamine</h1>
    <form method="get">
        <div class="form-group">
            <label for="number1">Esimene number</label>
            <input type="number" class="form-control" id="number1" name="number1">
        </div>
        <div class="form-group">
            <label for="number2">Teine number</label>
            <input type="number" class="form-control" id="number2" name="number2">
        </div>
        <button type="submit" class="btn btn-primary">Jaga</button>
    </form>

    <?php
    if (!empty($_GET['number1']) && !empty($_GET['number2'])) {
        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];

        if ($number2 != 0) {
            $result = $number1 / $number2;
            echo "<p class='mt-3'>Tulemus: $result</p>";
        } else {
            echo "<p class='mt-3 text-danger'>Hoiatus: Nulliga ei saa jagada!</p>";
        }
    }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>