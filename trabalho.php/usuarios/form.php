<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php";  ?>
<?php require_once "../controla_sessao/controla.php"; ?>

<div class="container">

    <h1>Cadastro de Usuário</h1>
    <hr>

    <form action="<?php echo isset($usuario) ?'atualizar.php' : 'inserir.php' ?>" method="post"enctype="multipart/form-data">

       <label for="nome" class="form-label">Nome</label><br>
       <input class="form-control" type="text" name="nome" id="nome" 
       value="<?php echo $usuario['nome'] ?? ""; ?>">

       <input type="hidden" name="id" id="id" 
       value="<?php echo $usuario['id'] ?? ""; ?>"><br>

       <label for="idade" class="form-label">Idade</label><br>
       <input class="form-control" type="int"  name="idade" id="idade" 
       value="<?php echo $usuario['idade'] ?? ""; ?>"><br>

       <label for="email" class="form-label">Email</label><br>
       <input class="form-control" type="text" name="email" id="email" 
       value="<?php echo $usuario['email'] ?? ""; ?>">

       <label for="endereco" class="form-label">Endereço</label><br>
       <input class="form-control" type="text" name="endereco" id="endereco" 
       value="<?php echo $usuario['endereco'] ?? ""; ?>">

       <br>
       <button type="submit" class="btn btn-dark">Cadastrar</button>

    </form>
    
</div>


    <?php require_once "../template/rodape.php";  ?>
