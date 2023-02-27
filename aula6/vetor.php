<h2>Vetores (array)</h2>
<p>
    São estrututas de armazenamento compostas hetereogeneas (1-dim), 
    que podem ser indexadas númericamente ou textualmente.
</p>

<?php
    //Exemplo variável simples
    $nota = 6;
    $nota = 3;
    echo $nota . "<br>"; //. é um join - concatenador

    //Exemplo vetor indexado númericamente 
    $notas = []; //outra forma $notas = array();
    $notas[] = 6;
    $notas[] = 3;

    //var_dump($notas);
    //imprimir só a primeira nota
    echo ($notas[0] + $notas[1]) /2; 

    //vetores com indice textual
    $notas = []; //cria um vetor vazio
    $notas ["debora"] = 7;
    $notas ['murilo'] = 7;8;
    $notas ['poliana'] = 9;
    echo "<p></p>";
echo "A Poliana tirou nota " . $notas['poliana'] . "<br> </br>";


    //imprimindo o conteúdo de um vetor númerico
    $valores = []; 
    $valores[] = 2;
    $valores[] = 4;
    $valores[] = 8;
    $valores[] = 10;
    $valores[] = 12;
    $valores[] = 14;
    $valores[] = 16;
 
    //ou - $valores = [2, 4, 8, 10, 12, 14, 16];

    //imprimindo o conteúdo de um vetor númerico
    for($i = 0; $i <= 6; $i ++){
    echo $valores[$i] . "<br>";
    }
    
   //for($i =6; $i >= 0; $i --){
        //echo $valores[$i] . "<br>";
        //}
    
    //somar valores de um valor
    $acumulador = 0;
    for($i=0; $i<=6; $i++){
        $acumulador = $acumulador + $valores[$i];
    }
    echo "<br> A soma dos valores é $acumulador";
?>
