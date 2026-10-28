<?php

function mdc(int $a, int $b): int
{
    $a = abs($a);
    $b = abs($b);

    while ($b !== 0) {
        $resto = $a % $b;
        $a = $b;
        $b = $resto;
    }

    return $a;
}

$a = 48;
$b = 18;

echo "O máximo divisor comum de $a e $b é " . mdc($a, $b);
?>