<?php
// # <pre>e usado no HTML e muda a visão -->
// echo "<pre>";
// $n = array(1, 3, 5, 7);
// print_r($n);
// $n[] = 9;
// print_r($n);
// echo "<br>";

// # de 1 a 9 em 2
// $r = range(1, 9, 2);
// print_r($r);
// echo "<br>";
// echo "</pre>";

// foreach ($r as $v)
//     echo "$v ";
// echo "<br>";


// #Chaves Personalizadas
// echo "<br>Chaves Personalizadas<br><pre>";
// $p = array(1 => "A", 3 => "B", 6 => "C", 8 => "D");
// print_r($p);
// echo "<br>";

// $p[] = "E";
// print_r($p);
// echo "<br>";

// unset($p[1]);
// print_r($p);
// echo "<br>";

// $p[2] = "a";
// print_r($p);
// echo "<br>";

// echo "</pre><br>";

// #Chaves Associativas
// echo "<br>Chaves Associativas<br><pre>";
// $cad = array(
//     "nome" => "Maria",
//     "idade" => 24,
//     "peso" => 53.6
// );
// print_r($cad);
// echo "<br>";

// $cad["sexo"] = "feminino";
// print_r($cad);

// echo "</pre><br>";

// foreach ($cad as $campo => $valor)
//     echo "$campo: $valor <br>";

// # Vetores de Vetores ou Matriz
// $m = array(
//     array(2, 3),
//     array(4, 5),
//     array(6, 7)
// );
// echo "<br>";
// foreach ($m as $arr) {
//     foreach ($arr as $p) {
//         echo "$p ";
//     }
//     echo "<br>";
// }
// echo "<br><div style =\"white-space: pre;\">";
// $a = array(6, 4, 3); 
// $b = array(4, 9, 5);
// $c = array(3, 2, 8);
// $m = array($a,$b,$c);

// // matriz
// foreach ($m as $f => $k) {
//     echo "C    | ";
//     foreach($k as $p => $v){
//         echo "  $p    ";
//     }
//     echo "<br>";
//     echo str_repeat("_",15);
//    break;
// }
// foreach ($m as $f => $k) {
//     echo "<br/>L-$f |";
//     foreach ($k as $p => $e) {
//         echo "   $e   ";
//     }
//     echo "<br/>";
// }

$v = array(65,56,32,23,98,89);
// var_dump($m);

// $totM = count($m,COUNT_RECURSIVE);
// $totV= count($a);
// echo "<br/><br/> Total de elementos no vetor $totV e na matriz $totM ";


// # Gerenciando os últimos elementos do vetor
// echo "<br><hr> array_push()  array_pop()<br>";
function exibeVertor($vetor){
    echo "Array ( ";
    foreach ($vetor as $posicao)
        echo "$posicao " ;
    echo ")<br>";
};

// echo "Vetor origem ";
// exibeVertor($v);

// echo " add 77 no final do vetor ";
// array_push($v,77);
// exibeVertor($v);

// echo "remove o último elemento"; 
// array_pop($v);
// exibeVertor($v);
 
// # Gerenciando os primeiros elementos do vetor
// echo "<br><hr> array_unshift()  array_shift()<br>";

echo "Vetor origem ";
exibeVertor($v);

// echo " add 77 no  inicio do vetor ";
// array_unshift($v,77);
// exibeVertor($v);

// echo "remove o primeiro elemento"; 
// array_shift($v);
// array_shift($v);
// exibeVertor($v);

// $somaV =array_sum($v);
// echo "<br>a soma das posições é $somaV <br>";

sort($v); # ordena em orde crescente
//rsort($v); # ordena em orde decrescente

//asort($v); # ordena em orde crescente e não altera a posição
exibeVertor($v);
print_r($v);
echo "<br><br>";

ksort($v); # ordem por Chaves
exibeVertor($v);
print_r($v);
echo "<br><br>";

krsort($v); # ordem reversa por Chaves
exibeVertor($v);
print_r($v);


for($i=0; $i<=10; $i++){
           if($i % 3 == 0)
                   continue;
           echo $i."-";
}
echo "Fim";

$a = 5;
  $b = 3;
  $c = ($a>$b)?true:false;
  print $c;


  $x = 4;
$y = &$x;
$z = ++ $y;
echo "X=$x Y=$y Z=$z";
echo"<br><br>";

function f($v, $n) { #função recunciva
    
    if ($n <= 0) return 1;
    else{
        ECHO $v[$n-1]."\n";
        return  $v[$n-1] * f($v, $n-2) + 1;
    }
// 3*(1*(0*+1)+1)+1
// 3*(1+1)+1
// 3*2+1 = 7
}
$a = array(0,1,2,3,4,5,6,7,8,9);
print (f($a, 10));
?>