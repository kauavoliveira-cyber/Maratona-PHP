<?php

function bubbleSort($vetor)
{
    $tamanho = count($vetor);

    for ($i = 0; $i < $tamanho - 1; $i++) {
        for ($j = 0; $j < $tamanho - $i - 1; $j++) {
            if ($vetor[$j] > $vetor[$j + 1]) {
                $temporario = $vetor[$j];
                $vetor[$j] = $vetor[$j + 1];
                $vetor[$j + 1] = $temporario;
            }
        }
    }

    return $vetor;
}

$vetor = array(5, 2, 9, 1, 7);
$vetorOrdenado = bubbleSort($vetor);

echo implode(', ', $vetorOrdenado);
?>
