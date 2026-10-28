<?php
$a = 1;
$b = -5;
$c = 6;

if ($a == 0) {
    echo "O valor de a deve ser diferente de zero.";
} else {
    $delta = ($b * $b) - (4 * $a * $c);

    echo "Delta = $delta<br>";

    if ($delta < 0) {
        echo "A equação não possui raízes reais.";
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);

        echo "x1 = $x1<br>";
        echo "x2 = $x2";
    }
}
?>
