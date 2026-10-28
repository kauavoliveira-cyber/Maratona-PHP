<?php

$vetor = [10, 20, 30, 40, 50];
$valorBuscado = 30;
$posicao = array_search($valorBuscado, $vetor, true);

if ($posicao !== false) {
    echo "Valor encontrado na posição {$posicao}.";
} else {
    echo "Valor não encontrado.";
}

?>