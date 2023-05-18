<?php

require_once "../conexao.php";

if(isset($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["preco"]))
{
    require_once "salvar_foto.php";
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$foto = $nome_arquivo;

//inclui o arquivo para salvar a foto do upload
require_once "salvar_foto.php";

//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `produto` (`nome`, `descricao`, `preco`, `foto`) VALUES (?, ?, ?, ?)";
echo $sql;

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssds", $nome, $descricao, $preco, $foto);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo produtos.php
header("Location: produtos.php");

