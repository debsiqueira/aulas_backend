<?php
  include_once "../template/cabecalho.php";
  include_once "../usuarios/consultar_todos.php";
?>

    <!-- Inicio do Menu -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        
      <li class="nav-item">
          <a class="nav-link" href="../usuarios/index.php">Alterar dados</a>
        </li>

        </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <!-- Final do Menu -->

    <hr>

    <!-- Lista de usuarioss -->
    <div class="container">
        <div class="row row-cols-4 g-4">

        <?php
          foreach($usuarios as $key => $usuario):
        ?>
       <!--<div class="col"> -->
            <div class="card">
              <div class="card-body">
                  <h5 class="card-title">"<?php echo $usuario["nome"]; ?>"</h5>
                  <a href="#" class="btn btn-primary"> Ver usuarios</a>
              </div>
            </div>
            <?php endforeach ?>
        </div>
      </div>
      
    <!-- Final da lista de usuarios -->

    <hr>

    <?php
  include_once "../template/rodape.php";
?>