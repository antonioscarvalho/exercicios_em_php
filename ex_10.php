<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //operadores aritméticos
        $a = 10;
        $b = 20;
        $c = 30;
        $d = 40;
        $e = 50;
        $f = 60;
        $g = 70;
        $h = 80;
        echo "Soma: " . ($a + $b) . "<br>";
        echo "Subtração: " . ($c - $d) . "<br>";
        echo "Multiplicação: " . ($e * $f) . "<br>";
        echo "Divisão: " . ($g / $h) . "<br>";
        echo "Resto: " . ($h % $g) . "<br>";
        echo "Exponenciação: " . ($a ** 2) . "<br>";
        // concatenação de strings é diferente de soma
        echo "Concatenação: " . "10" . "20" . "<br>";
        // diferentemente da linguagem de programação javascript, o operador de soma não concatena strings
    ?>
</body>
</html>