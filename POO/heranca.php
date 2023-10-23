<?php

class Human {
    public $idade = 29;

    public function falar(){
        echo "Olá mundo!";
    }

    private function gritar(){
        echo "PHP É MUITO BOM <br>";
    }

    public function getGritar(){
        $this->gritar();
    }

    protected function falarBaixo(){
        echo "lalala <br>";
    }

    public function getFalarBaixo(){
        $this->falarBaixo();
    }

}

class Programador extends Human {

}

$ze = new Human;

$ze->falar();
$ze->getGritar();
$ze->getFalarBaixo();();

$gabriel = new Programador;
$gabriel->idade. "<br>";
$gabriel->falar();
$gabriel->getGritar();
$gabriel->getFalarBaixo();