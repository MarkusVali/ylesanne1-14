<?php

// Function to replace profane words with asterisks
function asenda_ropud($sona) {
    $ropud = array("fuck", "bitch", "shit");
    foreach ($ropud as $ropp) {
        $sona = str_ireplace($ropp, str_repeat("*", strlen($ropp)), $sona);
    }
    return $sona;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the user's input name
    $nimi = $_POST["nimi"];
    $nimi = ucfirst(strtolower($nimi)); // Capitalize the first letter and convert the rest to lowercase

    // Convert each letter of the name to a string with a dot between them
    $nimi_tekstina = implode(".", str_split($nimi));

    // Replace profane words with asterisks
    $nimi_tekstina = asenda_ropud($nimi_tekstina);

    // Create the email address
    $email = strtolower($nimi) . "@tthk.ee";

    // Display the results
    echo "<p>Tere, $nimi!</p>";
    echo "<p>Tekst: $nimi_tekstina</p>";
    echo "<p>Email: $email</p>";
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Nimi: <input type="text" name="nimi"><br>
    <input type="submit" value="Saada">
</form>