<?php
define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "nespresso");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "Sorry, but the website is not working.\n";
        echo 'Error: ' . $mysqli->connect_error . '\n';
        exit();
    }
    
    mysqli_query($mysqli, "INSERT INTO forma1 (name, email, country, message)
    VALUES('$_POST[name]', '$_POST[email]', '$_POST[country]','$_POST[message]')");
?>