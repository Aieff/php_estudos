<?php

// Mais utilizado quando você sabe o número de repetições necessárias
// Valor inicial  * Condição  * incremento
for ($contador = 0; $contador <= 10; $contador++):
    echo "O contador é $contador <br>";

endfor;

echo "<hr>";

// Foreach é utilizado para percorrer Arrays
// Foreach significa (Para cada)
$cores = array("verde", "vermelho", "azul", "preto");

// Para cada item do array ele atribui a variavel valor
foreach($cores as $valor):
    echo $valor."<br>";
endforeach;

echo "<hr>";

// Assim você conseguirá exibir seu indice (Posição no Array)
$cores2 = array("verde", "vermelho", "azul", "preto");

foreach($cores2 as $indice => $valor):
    echo $indice. "-" .$valor."<br>";
endforeach;