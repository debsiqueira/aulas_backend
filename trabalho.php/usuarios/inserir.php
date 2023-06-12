<?php require_once "../controla_sessao/controla.php"; ?>
<?php

require_once "../conexao.php";

if(isset($_POST["nome"]) )
{


 $id = $_POST['id'];
 $nome =  $_POST["nome"];
 $idade = $_POST["idade"];
 $email = $_POST["email"];
 $endereco =  $_POST["endereco"];


//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `usuarios` (`nome`, `idade`, `email`, `endereco`) VALUES (?, ?, ?, ?)";
echo $sql;

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("sissi", $nome, $idade, $email, $endereco, $id);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo usuarios.php
header("Location: index.php");

