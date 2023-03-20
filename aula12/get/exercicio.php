<h2>Exercicio</h2>

<p>Crie uma página em PHP para gerar a tabuada do "x".
    O "x", número da tabela deve ser enviado via get.
</p>

<?php

    $tabuada = $_GET['tabuada'];
    
    for($i=0; $i<=10;$i++){
         echo "$tabuada * $i = " . $tabuada * $i . "<br>" ; 
    }
 
?>
