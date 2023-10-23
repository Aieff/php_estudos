<?php

class Animal {

    public $nome;

    function escolherNome($nome) {
        $this->nome = $nome;
    }

    function Latir() {
        return "Au au au <br>";
    }

    function latirForte() {
        return strtoupper($this->Latir());
    }

}

$frida = new Animal;
$frida->escolherNome("Frida");

echo $frida->Latir();
echo $frida->latirForte();

class Carro {

    public $cor;
    public $marca;
    public $velocidade_maxima;

    function setVelocidadeMaxima($v) {
         $this->velocidade_maxima = $v;
    }

    function getVelocidadeMaxima() {
        echo "A velocidade máxima deste carro é: $this->velocidade_maxima KM/h <br>";
    }

}

$bmw = new Carro;
$bmw->cor = "Preto";
$bmw->marca = "BMW";

$bmw->setVelocidadeMaxima(200);
$bmw->getVelocidadeMaxima();