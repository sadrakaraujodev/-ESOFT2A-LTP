<?php

/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25004000-1 - Ana Castela da Silva
 25004001-2 - Pedro Alvares Cabral
 25004001-3 - Roberto Carlos de Andrade
 25004001-4 - Sergio Roberto Gularte
 25004001-5 - Lauana Prado de Andrade
Data: 08 de Outubro de 2025
Descritivo: Procedimento com Múltiplos Parâmetros: Crie um procedimento mostrarDados que receba nome, idade e cidade e os imprima de forma organizada
*******************************************************************************/





function mostrardados($nome, $idade, $cidade) {
    echo "Seu Nome é: " . $nome . "<br>";
    echo "Sua Idade é: " . $idade . "<br>";
    echo "Sua Cidade é: " . $cidade . "<br>";
}

mostrardados("SADRAK", 25, "CURITIBA-PR");
?>