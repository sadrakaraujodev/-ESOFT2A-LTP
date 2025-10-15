<?php

function maiorNumero($num1, $num2) {
    if ($num1 > $num2) {
        return $num1;
    } else {
        return $num2;
    }
}

$resultado = maiorNumero(8, 12);
echo "O maior número é: " . $resultado;
?>
