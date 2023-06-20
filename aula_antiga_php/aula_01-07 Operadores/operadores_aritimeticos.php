<?php 
$n1 = $_GET["a"];
$n2 = $_GET["b"];
$n3 = $_GET["c"];
$soma = $n1 + $n2;
$subtrair = $n1 - $n2;
$media = ($n1 + $n2)/2;
echo "A soma entre $n1 + $n2 = $soma";
echo " a média é $media";
echo "<br>A subtração entre $n1 - $n2 = $subtrair";
echo "<br>A soma entre $n1 * $n2 = ".$n1*$n2;
echo "<br>A soma entre $n1 / $n2 = ".$n1/$n2;
echo " o resto é ".$n1%$n2;
echo "</br> <h2>Valores rescebidos: $n1 e $n2</h2>";
echo "<br>O valor absoluto de $n2 é ". abs($n2);
echo "<br>O valor de $n1<sup>$n2</sup> é " . pow($n1,$n2);
echo "<br>A Rais de $n1 é ". sqrt($n1);
echo "<br>O valor de $n2 arredondado é ". round($n2);
echo "<br>O valor de $n2 arredondado pra cima  é ". ceil($n2);
echo "<br>O valor de $n2 arredondado pra baixo é ". floor($n2);
echo "<br>O valor de $n2 a parte inreira é ". intval($n2);
echo "<br>O valor de $n3 formatado em moeda é R$". number_format($n3,2,",",".");
?>