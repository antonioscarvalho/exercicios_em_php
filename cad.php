<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php
            // var_dump($_REQUEST); 
            // $_REQUEST é um array associativo que contém os valores enviados pelo método GET ou POST
            $n = $_REQUEST['nome'];
            $s = $_REQUEST['sobrenome'];
            echo "<p>Olá, " . ucfirst($n) . " " . ucfirst($s) . ", seja bem vindo(a)!</p>";
        ?>
        <a href="ex_6.php">Voltar</a>
    </main>
</body>
</html>