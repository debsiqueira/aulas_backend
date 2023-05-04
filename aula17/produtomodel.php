<?php

require_once "../conexao.php";

//String com o comando SQL para ser executado no DB 
$sql = "INSERT INTO `produto` (`nome`, `descricao`, `preco`, `foto`) 
VALUES (?,?,?,?);";


//Prepara o SQL para ser executado no banco de dados
$comando= $conexao->prepare($sql);

//Adiciona os valores nos parâmetros
$comando->bind_param("ssds","a","b",1,"c" );

//executa o SQL - Comando no Banco de Dados 
$comando->execute();