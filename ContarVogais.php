<?php
$str = "computador";
// a função nativa = preg_match_all()
// realisa buscas com parâmetro
$vogais = preg_match_all('/[aeiou]/i', $str);
echo "Total de vogais: $vogais";
?>