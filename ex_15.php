<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor1 = isset($_GET["v1"]) ? $_GET["v1"] : '';
        $valor2 = isset($_GET["v2"]) ? $_GET["v2"] : '';
    ?>
    <section>
        <h1>Gerador de número aleatório.</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1:</label>
            <input type="text" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2:</label>
            <input type="text" name="v2" id="v2" value="<?=$valor2?>">
            <button type="submit">Enviar</button>
        </form>
    </section>
    <section id="resultado">
        <h2>Resultado:</h2>
        <?php
            //verificando se os valores foram preenchidos e se são numéricos
            if(is_numeric($valor1) && is_numeric($valor2)){
                $rand = rand($valor1, $valor2);
                echo "<p>O número escolhido entre $valor1 e $valor2 é <strong>$rand</strong></p>";
            }else{
                echo "<p>Preencha os valores corretamente para ver algum número no intervalo deles escolhido aleatóriamente.</p>";
            }
        ?>
    </section>
</body>
</html>
