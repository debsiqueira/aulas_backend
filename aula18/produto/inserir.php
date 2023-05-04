<?php

require_once "../conexao.php";

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$foto = "semfoto.png";

//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `produto` (`nome`, `descricao`, `preco`, `foto`) 
VALUES (?, ?, ?, ?);";
echo $sql;

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando -> bind_param("ssds", $nome,$descricao, $preco, $foto);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//abre o arquivo form.php
//header("Location: form.php");
