<?php 

class HumanoDois {

}

class Animal {

}

class Professor extends HumanoDois {

}

$turca = new Animal;

$marcos = new HumanoDois;

    if($marcos instanceof HumanoDois) {
        echo "Marcos é um HumanoDois";
    }

    
    if ($turca instanceof HumanoDois) {
        echo "turca é um HumanoDois";
    } else {
        echo "A turca não é um HumanoDois";
    }

$pedro = new Professor;

    
    if ($pedro instanceof Professor) {
        echo "Pedro é um Professor";
    } else {
        echo "A pedro não é um Professor";
    }


    if ($pedro instanceof HumanoDois) {
        echo "Pedro é um HumanoDois";
    } else {
        echo "A pedro não é um HumanoDois";
    }