<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $nome = "João"; // Declaração de variável feita de forma simples e aí há uma atribuição de valor
        echo "Olá, eu sou o $nome."; // Comando echo para imprimir na tela o valor da variável através do uso de aspas duplas
        const PI = 3.14; // Declaração de constante
        echo "<br> O valor de PI é: " . PI; // A const é um tipo de variável que não pode ser alterada
        // Regras de nomenclatura de variáveis:
        // 1. Não pode começar com números ou caracteres especiais
        // 2. Não pode conter espaços
        // 3. Não pode conter caracteres especiais
        // 4. Não pode conter acentos
        // 5. Não pode ser uma palavra reservada
        // 6. Cuidado, pois o PHP é case sensitive
        // 7. Nomes especiais como $this não podem ser usados
        // 8. Nomes de variáveis não podem conter hífen
        // 9. Aceita caracteres da tabela ASCII a partir do 128

        // Recomentações:
        // 1. Utilize nomes que façam sentido
        // 2. Utilize nomes que sejam fáceis de lembrar
        // 3. Para variaveis, de preferencia a letras minúsculas
        // 4. Para constantes, de preferência a letras maiúsculas
        // 5. Utilize camelCase para métodos e atributos, ex.: $nomeCompleto
        // 6. Utilize snake_case para variáveis, ex.: $nome_completo
        ?>
</body>
</html>