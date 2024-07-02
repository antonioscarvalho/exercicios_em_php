<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    //Estudo de strings
    $nome = "Fulano"; //double quotes (aspas duplas)
    $sobrenome = 'de Tal'; //single quotes (aspas simples)

    //Concatenação de strings
    $nome_completo = $nome . " " . $sobrenome;
    echo "Nome completo: $nome_completo <br>"; // o . é o operador de concatenação

    //Emojis
    $emoji = "PHP\u{1F418}"; // \u{1F418} é o código do emoji
    echo "Emoji: $emoji <br>";
    $emoji1 = 'PHP\u{1F418}'; // \u{1F418} é o código do emoji, mas por ser aspas simples, o conteudo não é interpretado
    echo "Emoji1: $emoji1 <br>";

    $nome1 = 'Fulano1';
    echo 'Nome: $nome1 <br>'; // aspas simples não interpretam variáveis
    echo "Nome: $nome1 <br>"; // aspas duplas interpretam variáveis

    const ESTADO = "SP";
    echo "Estado: " . ESTADO . "<br>"; //constantes não precisam de cifrão, mas sim do ponto

    //Funções com strings
    echo "Tamanho da string: " . strlen($nome_completo) . "<br>"; //strlen() retorna o tamanho da string
    echo "String em maiúsculas: " . strtoupper($nome_completo) . "<br>"; //strtoupper() retorna a string em maiúsculas
    echo "String em minúsculas: " . strtolower($nome_completo) . "<br>"; //strtolower() retorna a string em minúsculas
    echo "String com a primeira letra maiúscula: " . ucfirst($nome_completo) . "<br>"; //ucfirst() retorna a string com a primeira letra maiúscula
    echo "String com a primeira letra de cada palavra maiúscula: " . ucwords($nome_completo) . "<br>"; //ucwords() retorna a string com a primeira letra de cada palavra maiúscula
    echo "Estamos no ano de " . date("Y") . "<br>"; //date() retorna a data atual

    //Sequencia de escape
    echo "Sequência de escape: \"<br>"; // \" é a sequência de escape para aspas duplas
    echo "Antonio \"Cara de Sapato\" Junior<br>"; 

    //Escape sequencies
    echo "Quebra de linha: <br>";
    echo 'Tabulação Horizontal: \t';
    echo 'Tabulação Vertical: \v';
    echo 'Sinal de cifrão: \$';
    echo 'Sinal de porcentagem: \%';
    echo 'Sinal de aspas duplas: \"';
    echo 'Barra invertida: \\';
    echo 'CodePoint Unicode: \u{1F418}';
?>
</body>
</html>