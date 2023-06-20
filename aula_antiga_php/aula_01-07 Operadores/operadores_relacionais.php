<?php 
# Operador Relacionais
// $a > $b   -> Mairo
// $a < $b   -> Menor
// $a >= $b  -> Maior Igual
// $a <= $b  -> Menor Igual
// $a <> $b  -> Diferente
// $a != $b  -> Diferente
// $a == $b  -> igual
// $a === $b -> Idêntico

# Operador Unário
// $n1 = $_GET["a"];
// $n2 = $_GET["b"];
// $tipo = $_GET["op"];
$n1 = 3;
$n2 = "3";
echo "Os valores passados foram $n1 e $n2.<br>";
$r = $n1 == $n2 ?"Sim":"Não";
echo "As variáveis A e B são iguais? $r<br>";
echo "As variáveis A e B são identicas? ".($n1 === $n2?"Sim":"Não")."<br>";
$maior = $n1 > $n2 ? $n1:$n2;


#Operadores Lógico
$ano = 1977;
$idade = 2023 - $ano;
$tipo = ($idade >= 18 and $idade<65) ? "é Obrigatório":"Não é Obrigatório";
echo "Quem nasceu em $ano tem idade de $idade e seu voto $tipo";
?>
