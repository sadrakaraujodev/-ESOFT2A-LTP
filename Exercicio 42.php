<?php
// Função que recebe dois números e retorna o maior entre eles
function maiorNumero($num1, $num2) {
    if ($num1 > $num2) {
        return $num1;
    } else {
        return $num2;
    }
}

// Exemplo de uso
$resultado = maiorNumero(8, 12);
echo "O maior número é: " . $resultado;
?>
