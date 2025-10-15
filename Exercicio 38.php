<?php
function calcularMediaAluno($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;
    echo "Média: " . number_format($media, 2, ',', '.') . "<br>";

    if ($media >= 7) {
        echo "Situação: Aprovado";
    } else {
        echo "Situação: Reprovado";
    }
}

calcularMediaAluno(5.5, 6.0);
?> 
