<?php
$numeros = [7, 2, 10, 4, 6];
$soma = array_sum($numeros);
$media = $soma / count($numeros);
echo "Soma = $soma, Média = $media, Maior = " . max($numeros) . ", Menor =
" . min($numeros);
?>