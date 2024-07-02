<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
    </style>
    <title>exercicio1</title>
</head>
<body>
    <h1>Exercício 1</h1>
    <p>
        <?php
            date_default_timezone_set('America/Sao_Paulo');
            $nome = "Antonio Carvalho";
            $idade = 20;
            echo "<br><br>";
            echo "<p>Olá, meu nome é $nome e tenho $idade anos!</p>";
            echo "<br><br>";
            echo "<p>Hoje é dia " . date('d/m/Y') . " e o horário é " . date('H:i:s (T)') . ".</p>";
            echo "<br><br>";
            echo "<p>Este é meu primeiro programa em PHP!</p>";
            echo "<br><br>";
            echo "Configurações:";
            phpinfo();

        ?>
    </p>
    <p>
        <a href="ex_1.php">Voltar ao início,</a>
    </p>
</body>
</html>