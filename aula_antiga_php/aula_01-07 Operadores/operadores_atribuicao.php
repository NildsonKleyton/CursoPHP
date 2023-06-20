<?php 
$n1 = 10;
$n2 = 2;

echo "<br>".$n1 += $n2;
echo "<br>".$n1 -= $n2;
echo "<br>".$n1 *= $n2;
echo "<br>".$n1 /= $n2;

$preco = 852.58;
echo "<br><br>O Preço do produto e R$ ".number_format($preco,2,",").".";
$preco -= $preco*15/100;
echo "<br>O preço menos 15% é ".number_format($preco,2,",");
$n3= ++$n2;
echo "<br>$n3";
$n3= ++$n2;
echo "<br>$n3";
$n3= ++$n2;
echo "<br>$n3";
$n3= --$n2;
echo "<br>$n3";

## referencias
echo "<br><br> ##Referencias</h2>";
$a = 3;
$b = $a;
$b += 5;

echo "<br>A variavel  \"a\" vale $a";
echo "<br>A variavel  \"b\" vale $b";
$b = &$a; //&$a é referencias $b
$b += 5;
echo "<br>A variavel  \"a\" vale $a";

## variáveis de variáveis
echo "<br><br> ##variáveis de variáveis</h2><br>";
$site = "cursoEmVideo";
$$site = "CursoPHP";
$$$site = "cursoEmVideo-PHP";

echo $site;
echo "<br>$cursoEmVideo";
echo $CursoPHP;
?>