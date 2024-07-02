<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor1 = $_GET['v1'] ?? 0;
    ?>
    <section>
        <h1>Antecessor e Sucessor</h1>
        <form action="" <?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Número:</label>
            <input type="text" name="v1" id="v1" value="<?=$valor1?>">
            <button type="submit">Enviar</button>
        </form>
    </section>
    <section id="resultado">
        <h2>Resultado:</h2>
        <?php
            //verificando se os valores foram preenchidos
            if($valor1 != 0){
                $antecessor = $valor1 - 1;
                $sucessor = $valor1 + 1;
                echo "<p>O antecessor de $valor1 é <strong>$antecessor</strong> e o sucessor é <strong>$sucessor</strong></p>";
            }else{
                echo "<p>Preencha o valor para ver seu antecessor e seu sucessor</p>";
            }
        ?>
    </section>
</body>
</html>