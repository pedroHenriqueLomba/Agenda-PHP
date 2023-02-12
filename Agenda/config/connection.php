<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dataBase = "agenda";

    $conn = new PDO("mysql:host=$host; dbname=$dataBase", $user, $password);

?>