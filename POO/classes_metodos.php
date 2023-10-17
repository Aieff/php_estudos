<?php 

// PHP POO (Porgramação Orientada a Objetos)

class Pessoa {
    function falar() {
        echo "Olá eu sou um objeto <br>";
    }
    function somar($x, $y) {
        echo $x + $y . "<br>";
    }
}

// " -> " ele indica a ação (Chama a ação) ao meu objeto.
$gabriel = new Pessoa;

$gabriel->falar();

$xand = new Pessoa;

$xand->falar();

$gabriel->somar(10, 12);

// ---------------------------

class Cachorro {
    function latir() {
        echo "au! au! au! <br>";
    }
    function andar($m) {
        echo "Andou $m metros <br>";
    }
}

$cachorro_um = new Cachorro;

$cachorro_um->latir();
$cachorro_um->andar(10);
