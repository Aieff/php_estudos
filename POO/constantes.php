<?php

class Humanos {

    public const olhos = 2;
    public const bracos = 2;
    public const pernas = 2;

    function mostrarConstante(){
        echo self::bracos;
    }

}

$gabriel = new Humanos;

// Constantes são acessadas atraves dos ::
echo $gabriel::olhos;
echo $gabriel::bracos;
echo $gabriel::pernas;

$gabriel->mostrarConstante(); // Utilizando o self:: você terá acesso da constante pelo metódo