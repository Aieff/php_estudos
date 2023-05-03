<?php 

//PHP POO (Porgramação Orientada a Objetos)

class pessoa {
    function falar() {
        echo "Olá eu sou um objeto <br>";
    }
    function somar($x, $y) {
        echo $x + $y . "<br>";
    }
}

// " -> " ele indica a ação (Chama a ação) ao meu objeto.
$gabriel = new pessoa;

$gabriel->falar();

$xand = new pessoa;

$xand->falar();

$gabriel->somar(10, 12);