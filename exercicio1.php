<?php

/* Crie uma função que receba 2 números e retorne um array
associativo contendo a média e também um indicador booleano de
aprovado/reprovado. Considere aprovado com média >= 6.
*/

$desempenhoAluno = array();

function media($nota1, $nota2) {
    global $desempenhoAluno;
    $media = ($nota1 + $nota2) / 2;
    $aprovado = false;

    if ($media >= 6) {
        $aprovado = true;
    }

    array_push($desempenhoAluno, array(
        'media' => $media,
        'aprovado' => $aprovado
    ));    
}

media(8, 5);

var_dump($desempenhoAluno)

?>