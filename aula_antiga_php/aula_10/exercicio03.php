<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css" />    <title>Aula_PHP_ </title>
</head>

<body>
    <div class="div_image_php">
        <img class="image_php" src="../_imagens/php_logo.png">
    </div>
    <div class="content_wrapper">
        <div class="main_content">
            <div class="title_lege border_top">
                <h2>Curso de PHP para iniciantes</h2>
            </div>
            <div class="center php">
                <?php
                 $op = isset($_GET["est"])?$_GET["est"]:0;
                 switch($op){
                     case 1:
                         $reg = "REGIAO NORTE";
                         $image = "regiao-norte";
                         break;
                     case 2:
                         $reg = "REGIAO NORDESTE";
                         $image = "regiao-nordeste";
                         break;
                     case 3:
                         $reg = "REGIAO CENTRO-OESTE";
                         $image = "regiao-centro-oeste";
                         break;
                     case 4:
                         $reg = "REGIAO SUDESTE";
                         $image = "regiao-sudeste";
                         break;
                     case 5:
                         $reg = "REGIAO SUL";
                         $image = "regiao-sul";
                         break;
                     default:
                         $reg = "REGIAO INVALIDA";
                 }
                 echo "Você estar na $reg <br>";
                 echo "<hr>";
                 echo "<img src=\"../_imagens/$image.jpg\" alt=\"Imagem da $reg\"/>";
                 echo "<hr>";
                ?>
                
                <button class="meu-botao" onclick="history.back()">Voltar</button>
            </div>
            <div class="title_lege border_bottom">
                <p><samp>By</samp> Nildson Kleyton</p>
            </div>
        </div>
    </div>
</body>

</html>