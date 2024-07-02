<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Preencha as seguintes informações solicitadas:</h1>
    </header>

<form action="ex_4.php" method="post" <?php echo $_SERVER['PHP_SELF'];?>">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <br>
    <label for="telefone">Telefone:</label>
    <input type="tel" name="telefone" id="telefone">
    <br>
    <label for="mensagem">Mensagem:</label>
    <textarea name="mensagem" id="mensagem"></textarea>
    <br>
    <label for="casado">Casado:</label>
    <input type="checkbox" name="casado" id="casado">
    <br>
    <label for="altura">Altura:</label>
    <input type="number" name="altura" id="altura">
    <br>
    <input type="submit" value="Enviar">
</form>
<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];
    $casado = $_POST['casado'];
    $altura = $_POST['altura'];

    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Telefone: $telefone <br>";
    echo "Mensagem: $mensagem <br>";
    echo "Casado: $casado <br>";
    echo "Altura: $altura <br>";

    // e um número hexadecimal na linguagem PHP sempre começa com 0x. Exemplo: 0x1A, este número é convertido para decimal e considerado um inteiro.
    $hexa = 0x1A;
    echo "Hexadecimal: $hexa <br>";
    
?>

</body>
</html>