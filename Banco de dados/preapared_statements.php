<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $nome = "Suporte";
    $descricao = "Novo e importado";

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?,?)");

    $stmt->bind_param("ss", $nome, $descricao); // s = string, i = integer, d = double

    $stmt->execute();




    // Selecionando dados com prepared statements
    $id = 4;

    $stmt = $conn -> prepare("SELECT * FROM itens WHERE id > ?");

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $result = $stmt->get_result();

    $data = $result->fetch_all();

    print_r($data);