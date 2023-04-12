<?php 

class pessoa {
    function falar() {
        echo "Olá eu sou um objeto <br>";
    }
    function somar($x, $y) {
        echo $x + $y . "<br>";
    }
}

$gabriel = new pessoa;

$gabriel->falar();

$xand = new pessoa;

$xand->falar();

$gabriel->somar(10, 12);