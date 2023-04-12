<!--- Melhor forma de se utilizar é com uma API Rest --->

<?php
header('Content-Type: application/json');

$nome = $_POST['name'];
$comment = $_POST['comment'];

$pdo = new PDO('mysql:host=localhost; dbname=aula_ajax;', 'root', '');

$stmt = $pdo->prepare('INSERT INTO comments (name, comment) VALUES (:na, :co)');
$stmt->bindValue(':na', $nome);
$stmt->bindValue(':co', $comment);
$stmt->execute();

if($stmt->rowCount() >= 1) {
    echo json_encode('Comentário salvo com sucesso');
} else {
    echo json_encode('Falha ao salvar comentário');
}