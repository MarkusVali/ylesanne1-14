<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juubel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Juubel</h1>
    <form method="get">
        <div class="form-group">
            <label for="number1">Vanus</label>
            <input type="number" class="form-control" id="number" name="number">
        </div>
        <button type="submit" class="btn btn-primary">Kalkuleeri</button>
    </form>

    <?php
    if (!empty($_GET['number'])) {
        $number = $_GET['number'];

        $result = $number % 5;
        if ($result == 0) {
            echo "<p class='mt3'>See on juubel!</p>";
        }
        if ($result != 0) {
            echo "<p class='mt3'>See ei ole juubel!</p>";
        }
    }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>