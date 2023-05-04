<?php

$host="127.0.0.1";
$port= "3306";
$user= "root";
$password="";
$database="db_catalago_3infoa";


//faz a conexão com do PHP com o MySQL
$conexao = new mysqli($host,                     
                     $user,
                     $password,
                     $database,
                     $port);

//Verfica se houve um error ao realizar a conexão
if($conexao-> connect_error){
    echo "Foi encontrado um erro : " . $conexao-> connect_error;
    die();
}




?>