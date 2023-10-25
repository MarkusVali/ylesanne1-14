<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liitu uudiskirjaga</title>
</head>
<body>

    <form action="" method="post">
        <label for="username">Kasutajanimi:</label>
        <input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"><br>
        <input type="submit" name="submit" value="Liitu uudiskirjaga">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];

        echo "<p>Andmed saadetud: Kasutajanimi - $username, Email - $email</p>";
    }
    ?>

</body>
</html>