<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);


    // Inserindo dados com prepared statements
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




    // Atualizando dados com prepared statements

    $id = 11;

    $stmt = $conn -> prepare("UPDATE itens SET nome = ?, descricacao = ? WHERE id = ?");

    $nome = "sofá";
    $descricao = "Sofá semi-novo";

    $stmt -> bind_param("ssi", $nome, $descricao, $id);

    $stmt -> execute();

    if($stmt->error) {
        echo "Erro: " .$stmt->error;
    }


    

    // Deletando dados com prepared statements

    $nome = "teste";

    $stmt = $conn -> prepare("DELETE FROM itens WHERE nome = ?");

    $stmt -> bind_param("s", $nome);

    $stmt -> execute();

    $conn -> close();