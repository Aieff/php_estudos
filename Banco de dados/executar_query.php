<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // Aula

    $query = "SELECT * FROM itens";

    $result = $conn -> query($query);
    print_r($result);

    $conn -> close();