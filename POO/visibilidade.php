<?php

class Carro2 {

    public $rodas = 4;
    private $vidro = "Sem película";
    protected $portas = 4;

    public function getVidro() {
        return $this->vidro;
    }

    public function getPortas() {
        return $this->portas;
    }


}

class Mecanico {

    public function alterarRodas($obj){
        $obj->rodas = 10;
    }

    public function colocarPelicula($obj, $pelicula){
        $obj->vidro = $pelicula;
    }

}

$carro = new Carro2;

echo $carro->rodas. "<br>";

$gabriel = new Mecanico;

$gabriel->alterarRodas($carro);

echo $carro->rodas. "<br>";

// Não pode aterar por ser private
// $gabriel->colocarPelicula($carro, "G20");

echo $carro->getVidro(). "<br>";
echo $carro->getPortas(). "<br>";