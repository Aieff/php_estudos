<?php

// Apenas um exemplo de uma função em PHP que poderá me retornar X resultados
function buscarDados() {

    $id = 2;
    $sql = "SELECT nome, sobrenome, nascimento FROM tabela WHERE id = {$id} ";
    return $sql;
};

// Variavel no qual eu posso armazenar o valor dessa função (A ideia da função em PHP é simplesmente facilitar e diminuir a quantidade de código do projeto)
// Por ser POO você poderá trabalhar de diferentes maneiras com PHP
$dados = buscarDados();
