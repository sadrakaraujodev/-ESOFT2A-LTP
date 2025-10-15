<?php
// Procedimento para exibir os dados de um carro
function exibirCarro($carro) {
    echo "=== Dados do Carro ===<br>";
    echo "Marca: " . $carro["marca"] . "<br>";
    echo "Modelo: " . $carro["modelo"] . "<br>";
    echo "Ano: " . $carro["ano"] . "<br>";
}

// Exemplo de uso
$carro1 = array(
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "ano" => 2022
);

exibirCarro($carro1);
?>
