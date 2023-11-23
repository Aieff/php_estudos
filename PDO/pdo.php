<?php
    
    // Conexão ao mysql pelo PDO

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);


    // Inserção de dados com PDO e prepare statements

    $stmt = $conn -> prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

    $nome = "Suporte monitor";
    $descricao = "Está novo";

    $stmt -> bindParam(":nome", $nome);
    $stmt -> bindParam(":descricao", $descricao);

    $stmt -> execute();


    // Atualizando dados com PDO e prepare statements

    $id = 5;
    $nome = "Teclado Microsoft";
    $descricao = "Está novo";

    $stmt = $conn -> prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

    $stmt -> bindParam(":id", $id);
    $stmt -> bindParam(":nome", $nome);
    $stmt -> bindParam(":descricao", $descricao);

    $stmt -> execute();


    // Selecionando dados com PDO e prepare statements

    $id = 5;

    $stmt = $conn -> prepare("SELECT * FROM itens WHERE id > :id");

    $stmt -> bindParam(":id", $id);

    $stmt -> execute();

    $data = $stmt -> fetch(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC - Auxilia a montar corretamente o array

    print_r($data);

    $itens = $stmt -> fetchAll(PDO::FETCH_ASSOC); // Trará todos os itens da nossa query

    print_r($itens);