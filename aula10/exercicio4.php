<h2>Exercicio 4 - Matrizes</h2>

<?php

    $vetor1 = [
        "nome" => "Poliana",
        "nota" => 7,
        "notas" => 9
    ];

    $vetor2 = [
        "nome" => "Murilo",
        "nota" => 8,
        "notas" => 5
    ];

    $vetor3 = [
        "nome" => "André",
        "nota" => 6,
        "notas" => 7
    ];

    $matriz = [$vetor1, $vetor2, $vetor3];

    foreach($matriz as $key => $value){
        echo $value["nome"] . " | " .  $value["nota"] . " | " .  $value["notas"] . " | " . "<br>"  ;
    };
     echo "<br>";
    
    ?>
