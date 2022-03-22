<?php

//checar se existem possíveis erros
ini_set('display_erros', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//definindo variáveis nas configurações
$db_user = "root";
$db_password = "";
$db_name = "cadastrodeclientes";

//Ligando o código php com o banco de dados (mysql)
$db = new PDO('mysql:host=localhost;dbname=' .$db_name .';charset=utf8', $db_user, $db_password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if($db){
    echo "I'm working";
}else{
    echo "I'm not working!";
}
?>