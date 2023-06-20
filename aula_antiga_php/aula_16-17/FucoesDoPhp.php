<?php
## >> PARTE 1 << 

## print com formatação

$pord = "Leite";
$preco = 4.50;
$bool =  1 < 2;
echo "O $pord está custanto R$ " . number_format($preco, 2) . ".<br>";
printf("O %s está custanto R$ %.2f.", $pord, $preco);

## %s valor texto -> string
## %f valaor real
## %d valor decimal (positivo e negativo)
## %u valor decimal sem sinal (positivo)
## %b valor booleano 0=falso 1=verdadeiro

echo("<br><br><hr><br>");
## print_r mostra vetor
$v[0] = 4;
$v[1] = 5;
$v[2] = 3;
echo("Usando print_r <br>");
print_r($v);
$v2 = array(1,2,3,5,7);
echo("<br>");
print_r($v2);
echo("<br><br>Usando var_dump<br>");
var_dump($v);
echo("<br><br>Usando var_export <br>");
var_export($v2);

## woedwarp
$texto = "A função \"wordwrap()\" do PHP é usada para quebrar uma string em um número especificado de caracteres por linha. Isso é útil para formatar saída de texto em colunas ou para exibir um parágrafo com largura limitada em um layout específico.";

$textoWordwrap = wordwrap($texto, 23, "<br>", false);//<br> é para o usar html e \n para exibir no html a quebra de linha
echo "<br><hr><h3>wordwrap</h3>".$textoWordwrap;
$tamanho = strlen($texto);
echo "<br>Texto tem $tamanho caracteres";

## trim elimina os espaço do inicio e do fim
## ltrim apenas do inicio
## rtrim apenas no fim
echo "<br><hr><h3>trim, ltrim e rteim</h3>";
$nome = "   nildson kleyton  ";
echo("Usando srtlen ".strlen($nome)."<br>");

$nomeTrim = trim($nome);
echo("Usando trim ".strlen($nomeTrim)."<br>");

$nomeLtrim = ltrim($nome);   
echo("Usando ltrim ".strlen($nomeLtrim)."<br>");

$nomeRtrim = rtrim($nome);
echo("Usando rtrim ".strlen($nomeRtrim)."<br>");

## str_word_count
echo "<br><hr><h3>str_word_count</h3>";
$frase = "Estou estudando PHP no Curso em Vídeo";
$cont = str_word_count($frase,0,"í");// 0 conta quantas palavras tem no texto
echo $cont;
echo "<br>";
$plavraArr = str_word_count($frase, 1, "í");// 1 gera um vertor
print_r($plavraArr);

echo "<br>".$plavraArr[4]." ".$plavraArr[5]." ".$plavraArr[$cont-1]."<br><br>";
$palavaIniciaNaposicao = str_word_count($frase,2,"í");
print_r($palavaIniciaNaposicao);
echo "<br><br>";

## explode
echo "<br><hr><h3>explode</h3>";
$site = "Curso em Vídeo";
$vetor = explode(" ",$site);
print_r($vetor);
echo "<br>";


$nome="João Carlos Pereira da Silva";
$palavras = explode(" ", $nome);
print_r($palavras);
echo "<br>";
echo "Olá Sr. ".$palavras[0]." ".$palavras[count($palavras)-1];
echo "<br>";

## str_split
echo "<br><hr><h3>str_split</h3>";
$nome = "Maria Carla";
$vetor = str_split($nome,);
print_r($vetor);
echo "<br>";

## implode join
echo "<br><hr><h3>implode join</h3>";
$vetor = null;
$vetor[0]="Curso";
$vetor[1]="em";
$vetor[2]="Vídeo";
$texto = implode(" ",$vetor);
$textoj = join(" ", $vetor);

print $texto;
echo "<br>";
print $textoj;

## chr => Gerar uma string de byte único a partir de um número
## ord Converter o primeiro byte de uma string para um valor entre 0 e 255
echo "<br><hr><h3>chr // ord</h3>";
$letra = chr(99);
echo $letra;
echo " => ";
$codletra = ord($letra);
echo $codletra;

echo "<br>";
$codletra = ord('C');
echo $codletra;
echo " => ";
$letra = chr($codletra);
echo $letra;

## >> PARTE 2 <<

## strtolower // strtoupper // ucfirst // ucword // strrev
echo "<br><hr><h3>strtolower // strtoupper // ucfirst // ucword // strrev</h3>";

$nome = "niLdson kleyTon";

echo "Seu nome é: ". strtolower($nome);
echo "<br> Seu nome é: ". strtoupper($nome);
echo "<br> Seu nome é: ". ucfirst($nome);
echo "<br> Seu nome é: ". ucwords($nome);
echo "<br> Seu nome é: ". strrev($nome);

## strpos
echo "<br><hr><h3>strpos // stripos</h3>";

$frase = "Estudando PHP";
$pos = strpos($frase, "PHP");
echo "A palavra \"PHP\" esta na posição $pos";
echo "<br>";
$ipos = stripos($frase, "pHp");
echo "A palavra \"PHP\" esta na posição $ipos";

## substr_count
echo "<br><hr><h3>substr_count</h3>";
$frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
$cont = substr_count($frase, "PHP");
print("PHP foi encontrado $cont vezes.");

## sbustr
echo "<br><hr><h3>sbustr</h3>";
$site = "Curso em Video";
$sub = substr($site,0,5);
echo "$sub ";
echo "<br>";

$sub = substr($site,6);
echo "$sub ";
echo "<br>";

$sub = substr($site,-5);
echo "$sub ";
echo "<br>";

$sub = substr($site,-5,2);
echo "$sub ";
echo "<br>";

$sub = substr($site,5,3);
echo "$sub ";
echo "<br>";

## str_pad
echo "<br><hr><h3>str_pad</h3>";
$nome = "Testador";
$novoNome = str_pad($nome, 30, " ", STR_PAD_RIGHT);
print ("Eu sou {$novoNome} OK!");
echo "<br>";
$novoNome1 = str_pad($nome, 30, " ", STR_PAD_LEFT);
print ("Eu sou {$novoNome1} OK!");
echo "<br>";

$novoNome2 = str_pad($nome, 30, " ", STR_PAD_BOTH );
print ("Eu sou {$novoNome2} OK!");

## str_repeat()
echo "<br><hr><h3>str_repeat()</h3>";

$txt = str_repeat("PHP ",3);
echo $txt;

## str_replace
echo "<br><hr><h3>str_replace</h3>";
$frase = "Estou estudando Java, jaVa é muito bom<br>";
echo $frase;

$novaFrase = str_replace("Java","PHP",$frase);
echo $novaFrase;

$novaFrase = str_ireplace("java","PHP",$frase);
echo $novaFrase;