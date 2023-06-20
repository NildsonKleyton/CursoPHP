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
            <div class="center">
                <?php
                #Coloque seu conteudo aqui...
                require_once 'Lutador.php';
                require_once 'Luta.php';

                $l = [];
                $l[0]=new Lutador("Mucuzulo"  ,"Zulandia" ,45, 1.83,    98,  2, 0, 0);
                $l[1]=new Lutador("Pretty Boy","frança"   ,31, 1.75,  68.9, 11, 3, 1);
                $l[2]=new Lutador("Putscript" ,"Brasil"   ,29, 1.68,  57.8, 14, 2, 3);
                $l[3]=new Lutador("SnapShadow","EUA"      ,35, 1.65,  80.9, 12, 2, 1);
                $l[4]=new Lutador("Dead Code" ,"Austrália",28, 1.93,  81.6, 13, 0, 2);
                $l[5]=new Lutador("Nerdaart" ,"Brasil"    ,30, 1.81, 105.7, 12, 2, 4);
                
                // for ($i=0; $i < count($l); $i++) { 
                //    $l[$i]->status();
                // }

                $UEC01 = new Luta();
                $ded = $l[4];
                $den = $l[3];
                $UEC01->marcarLuta(  $ded , $den);
                $UEC01->lutar();
                echo "<br>";
                $ded->status();
                $den->status();


     
                ?>
                </br></br>
            </div>
            <div class="title_lege border_bottom">
                <p><samp>By</samp> Nildson Kleyton</p>
            </div>
        </div>
    </div>
</body>

</html>