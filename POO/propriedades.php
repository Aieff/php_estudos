<?php 

class Car {
    // Uma classe pode possuir métodos e propriedades

    public $rodas = 4;
    public $aro = 20;
    public $cor = "vermelho";

    function ligar() {
        echo "Vruuummm <br>";
    }

}

$ferrari = new Car;

echo $ferrari->aro;

$ferrari->rodas = 4; // Altera o valor da minha propriedade para o meu objeto instanciado

echo $ferrari->rodas;

$ferrari->cor = "Azul"; 

echo $ferrari->cor;

$ferrari->ligar();

// ---------------------------------

class Pessoa {
    public $nome;
    public $idade;

    function Andar($m) {
        echo "Andou $m metros <br>";
    }
}

$Gabriel = new Pessoa;

$Gabriel->nome = "Gabriel";
$Gabriel->idade = 20;

echo "O nome dele é $Gabriel->nome e tem $Gabriel->idade anos <br>";

$Gabriel->Andar(20);