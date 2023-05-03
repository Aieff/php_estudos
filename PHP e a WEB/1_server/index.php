<?php 

print_r($_SERVER);

echo $_SERVER['MYSQL_HOME'] . "<br>"; // Acessar uma chave da variavel de ambiente do $_SERVER

if($_SERVER['SERVER_NAME'] == 'localhost') {

    echo "Está acessando o localhost";

}