<?php require_once "../controla_sessao/controla.php"; ?>
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>

<div class="container">
    <h1>usuarios</h1>
    <hr>

    <div class="text-end">
        <a href="form.php" class="btn btn-success">Inserir usuarios
        </a>
    </div>

    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Email</th>
      <th scope="col">Endereço</th>
    </tr>
</thead>
<tbody>

<?php foreach($usuarios as $usuario){ ?>
    <tr>
      <th scope="row"><?php echo $usuario ['nome']; ?></th>

      <td><?php echo $usuario['idade']; ?> </td>

      <th scope="row"><?php echo $usuario ['email']; ?></th>

      <td><?php echo $usuario['endereço']; ?> </td>

      

      <td>
        <a href="excluir.php?id=<?php echo $usuario ['id']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
        <a href="form.php?id=<?php echo $usuario ['id']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
      </td>
    </tr>
<?php } ?>

  </tbody>
</table>

</div>

<?php require_once "../template/rodape.php"; ?>