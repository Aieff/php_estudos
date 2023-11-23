<?php

    // Define constantes
    // Por convenção se utiliza letras maiusculas em constantes

    define('APP_NAME', 'Minha aplicação');
    define('VERSAO', '1.0.0');
    define('MOSTRA_ERROS', true);
    define('PI', 3.14);

    echo APP_NAME;
    echo '<br>';
    echo VERSAO;

    // Defined verifica se já está definida

    // Se for (!) diferente de true executa o if e define o valor a constante

    if (!defined('APP_NAME')) {
        define('APP_NAME', 'Meu App');
    }

    // Outra forma

    defined('CONSTANTE') OR define('CONSTANTE', 'Valor');

    // PHP 7.0 em diante é possivel definir um array

    define('NAMES', ['Gabriel', 'João', 'Marcos']);

    echo NAMES[1];