<?php

function generate_user_data($name) {
    $kasutajanimi = $name;
    $email = str_replace(' ', '', strtolower($kasutajanimi) . "@hkhk.edu.ee");

    $kood = '';
    $symbols = 'ABCDEEFGHIJKLMNOPQRTSUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $length = strlen($symbols);

    for ($i = 0; $i < 7; $i++) {
        $kood .= $symbols[rand(0, $length - 1)];
    }

    return array(
        "Kasutajanimi" => $kasutajanimi,
        "Email" => $email,
        "Kood" => $kood,

    );
}

$username = "Markus Väli";
$user_data = generate_user_data($username);

foreach ($user_data as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

?>