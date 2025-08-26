<!DOCTYPE html> 
<html lang="pt-BR"> <!-- lang="pt-BR" = define o idioma da página como português do Brasil -->

<head>
    <meta charset="UTF-8"> <!-- charset="UTF-8" = permite acentos e caracteres especiais -->
    <title>Soma em PHP</title> <!-- Título exibido na aba do navegador -->
</head>

<body>
    <h2>Somar dois números</h2> <!-- Título da seção -->

    <!-- Formulário HTML -->
    <form 
        method="post" <!-- method="post" = envia os dados de forma segura ao servidor -->
        action=""> <!-- action="" = envia os dados para a própria página -->

        <!-- Campo 1 -->
        <label for="num1">Digite o primeiro número:</label> <!-- for="num1" = conecta o label ao input com id="num1" -->
        <input 
            type="number" <!-- type="number" = permite apenas números -->
            id="num1" <!-- id="num1" = identificador único do input -->
            name="num1" <!-- name="num1" = nome que será usado no PHP para acessar o valor -->
            required> <!-- required = campo obrigatório -->
        <br><br>

        <!-- Campo 2 -->
        <label for="num2">Digite o segundo número:</label>
        <input 
            type="number" 
            id="num2" 
            name="num2" 
            required>
        <br><br>

        <!-- Botão de envio -->
        <button 
            type="submit"> <!-- type="submit" = envia os dados do formulário -->
            Calcular
        </button>
    </form>

    <hr>

    <?php
    // PHP: recebe e processa os dados do formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado via POST

        // Captura os valores enviados pelo formulário
        $num1 = $_POST["num1"]; // $_POST["num1"] pega o valor do input com name="num1"
        $num2 = $_POST["num2"]; // $_POST["num2"] pega o valor do input com name="num2"

        // Calcula a soma
        $soma = $num1 + $num2;

        // Exibe o resultado na tela
        echo "<h3>Resultado:</h3>";
        echo "A soma de $num1 + $num2 é = <b>$soma</b>";
    }
    ?>
</body>
</html>
