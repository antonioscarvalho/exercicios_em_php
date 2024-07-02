<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //funções aritméticas
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é ".abs($v2);
        echo "<br/>O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2);
        echo "<br/>A raiz de $v1 é ".sqrt($v1);
        echo "<br/>O valor de $v1 arredondado é ".round($v1); //ceil() arredonda para cima e floor() arredonda para baixo
        echo "<br/>A parte inteira de $v1 é ".intval($v1);
        echo "<br/>O valor de $v1 em moeda é R$".number_format($v1, 2, ",", ".");
        echo "<br/>O valor de $v1 convertido para binário é ".decbin($v1);
        echo "<br/>O valor de $v1 convertido para hexadecimal é ".dechex($v1);
        echo "<br/>O valor de $v1 convertido para octal é ".decoct($v1);
        echo "<br/>O valor de $v1 convertido para binário é ".base_convert($v1, 10, 2);
        echo "<br/>O valor de $v1 convertido para decimal é ".base_convert($v1, 2, 10);
        echo "<br/>O valor de $v1 convertido para hexadecimal é ".base_convert($v1, 10, 16);
        echo "<br/>O valor de $v1 convertido para octal é ".base_convert($v1, 10, 8);
        echo "<br/>O valor máximo entre $v1 e $v2 é ".max($v1, $v2);
        echo "<br/>O valor mínimo entre $v1 e $v2 é ".min($v1, $v2);
        echo "<br/>O valor de $v1 em radianos é ".deg2rad($v1);
        echo "<br/>O valor de $v1 em graus é ".rad2deg($v1);
        echo "<br/>O valor de $v1 em seno é ".sin($v1);
        echo "<br/>O valor de $v1 em cosseno é ".cos($v1);
        echo "<br/>O valor de $v1 em tangente é ".tan($v1);
        echo "<br/>O valor de $v1 em arco seno é ".asin($v1);
        echo "<br/>O valor de $v1 em arco cosseno é ".acos($v1);
        echo "<br/>O valor de $v1 em arco tangente é ".atan($v1);
        echo "<br/>O valor de $v1 em arco tangente 2 é ".atan2($v1, $v2);
        echo "<br/>O valor de $v1 em hiperbólico seno é ".sinh($v1);
        echo "<br/>O valor de $v1 em hiperbólico cosseno é ".cosh($v1);
        echo "<br/>O valor de $v1 em hiperbólico tangente é ".tanh($v1);
        echo "<br/>O valor de $v1 em logaritmo natural é ".log($v1);
        echo "<br/>O valor de $v1 em logaritmo na base 10 é ".log10($v1);
        echo "<br/>O valor de $v1 em logaritmo na base 2 é ".log($v1, 2);
        echo "<br/>O valor de $v1 em exponencial é ".exp($v1);
        echo "<br/>O valor de $v1 em exponencial menos 1 é ".expm1($v1);
        echo "<br/>O valor de $v1 em logaritmo de 1 mais o valor é ".log1p($v1);
        echo "<br/>O valor de $v1 em raiz quadrada do quadrado mais 1 é ".hypot($v1, $v2);
        echo "<br/>O valor de $v1 em cosseno hiperbólico inverso é ".acosh($v1);
        echo "<br/>O valor de $v1 em seno hiperbólico inverso é ".asinh($v1);
        echo "<br/>O valor de $v1 em tangente hiperbólica inverso é ".atanh($v1);
        echo "<br/>O valor de $v1 em arredondamento de precisão é ".round($v1, 2);
        echo "<br/>O valor de $v1 em arredondamento de precisão para cima é ".ceil($v1);
        echo "<br/>O valor de $v1 em arredondamento de precisão para baixo é ".floor($v1);
        $r = pi();
        echo "<br/>O valor de pi é $r";


    ?>
</body>
</html>