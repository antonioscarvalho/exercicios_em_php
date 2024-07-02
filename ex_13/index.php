<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            //capturando o valor do form retroalimentado
            $valor1 = $_GET['v1'] ?? 0;
            $valor2 = $_GET['v2'] ?? 0;
            //verificando se os valores foram preenchidos
        ?>
        <h1>Soma de dois valores</h1>
        <form action="" <?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Value1</label>
            <input type="text" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Value2</label>
            <input type="text" name="v2" id="v2" value="<?=$valor2?>">
            <button type="submit">Somar</button>
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php
            //verificando se os valores foram preenchidos
            if($valor1 && $valor2){
                $soma = $valor1 + $valor2;
                echo "<p>A soma de $valor1 + $valor2 é igual a <strong>$soma</strong></p>";
            }else{
                echo "<p>Preencha os valores para realizar a soma</p>";
            }
        ?>
    </section>
</body>
</html>