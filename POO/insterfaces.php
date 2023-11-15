<?php

    interface Caracteristicas {

        public function falar();

    }

    class Humano implements Caracteristicas {

        public $idade = 29;

    public function falar() {
        echo "Olá mundo!";
    }

    }

    $matheus = new Humano;
    $matheus -> falar();