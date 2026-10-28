<?php
$limite = 100;

echo "Números primos de 1 a $limite:<br>";

for ($numero = 2; $numero <= $limite; $numero++) {
    $ehPrimo = true;

    for ($divisor = 2; $divisor < $numero; $divisor++) {
        if ($numero % $divisor === 0) {
            $ehPrimo = false;
            break;
        }
    }

    if ($ehPrimo) {
        echo $numero . " ";
    }
}
?>