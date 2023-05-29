<?php include_once "../template/cabecalho.php"; ?>

<div class="container">
    <h1>Controle de Acesso</h1>
    <hr>
    
<form action="verifica_login.php" method="post">
<label for="login" class="form-label">Usuário</label>
<input type="text" name="usuario" class="form-control" id="login">
<label for="login" class="form-label">senha</label>
<input type="password" name="usuario" class="form-control" id="login">
<button type="submit" class="btn btn-primary">Entrar </button>
</form>
</div>


<?php include_once "../template/rodape.php"; ?>