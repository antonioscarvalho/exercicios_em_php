<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // expressões aritméticas
        $a = 10;
        $b = 20;
        $c = $a + $b;
        echo "<p>$a + $b = $c</p>";
        $c = $a - $b;
        echo "<p>$a - $b = $c</p>";
        $c = $a * $b;
        echo "<p>$a * $b = $c</p>";
        $c = $a / $b;
        echo "<p>$a / $b = $c</p>";
        $c = $a % $b;
        echo "<p>$a % $b = $c</p>";
        $c = $a ** $b;
        echo "<p>$a ** $b = $c</p>";

        // ordem de precedência
        // 1. Parênteses
        // 2. Exponenciação
        // 3. Multiplicação e Divisão
        // 4. Adição e Subtração
        $a = 10;
        $b = 20;
        $c = 30;
        $d = 40;
        echo "<p>$a + $b * $c = " . ($a + $b * $c) . "</p>"; // 610, pois a multiplicação é feita primeiro
        echo "<p>($a + $b) * $c = " . (($a + $b) * $c) . "</p>"; // 900, pois a soma dos parênteses é feita primeiro   
    ?>
</body>
</html>