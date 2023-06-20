<?php 
## Variáveis
$nome = "Nildson";
$sobrenome = "Costa Silva";
$idade = 45;
$peso = 99.5;
$pais = "Brazil";
$texto = $idade > 45 ? "você tem $idade e " :"";
## Constantes
const PAIS = "Brazil";
const _NACIONALIDADE ="Brasileiro" ;
echo "Olá $nome $sobrenome ".$texto." pesa $peso e mora no ".PAIS." é ". _NACIONALIDADE. "<br>";
print "Olá ".$nome." ". $sobrenome." você tem $idade e pesa $peso e mora no $pais é ". _NACIONALIDADE."<BR>";

ECHO  $nome;
?>