<h2>Exercicio 3 - Matrizes</h2>

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

    for($i=0;$i<=2;$i++){
        foreach($matriz[$i] as $key => $value){
            echo $value . " | ";
        };
        echo "<br>";
    };
    ?>