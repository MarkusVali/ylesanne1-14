<?php
session_start();

if ($_POST['password'] === 'sinu_parool') {
    $_SESSION['authenticated'] = true;
    header("Location: index.php");
    exit();
} else {
    echo "Vale parool. Proovi uuesti.";
}
?>
