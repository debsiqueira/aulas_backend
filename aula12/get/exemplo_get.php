<p>
     O cliente faz a requisição ao servidor que envia a resposta por meio do $_get
    ? serve para reparar url dos dados que vão ser enviados para o servidor por meio da url http://localhost/exemplo_get.php?var=valor</p>
<?php
   

    $resultado = $_GET['numero1'] + $_GET['numero2'];
    echo "O resultado da soma é $resultado";

?>