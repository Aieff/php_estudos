<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // Aula

    $query = "SELECT * FROM itens";

    $result = $conn -> query($query);

    // Me retornou um resultado
    $item = $result -> fetch_assoc();
    print_r($item);

    // Me retorna todos resultados
    $itens = $result -> fetch_all();
    print_r($itens);

    $conn -> close();