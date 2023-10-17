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