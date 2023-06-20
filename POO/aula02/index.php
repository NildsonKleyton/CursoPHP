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
                <h2>Curso de PHP POO</h2>
            </div>
            <div class="center">
                <?php
                    require_once 'Caneta.php';

                    $c1 = new Caneta;
                    $c1->cor = "azul";
                    $c1->pota = 0.5;
                    $c1->tampada = false;
                    $c1->tampar();
                    print_r($c1);
                    echo "<br>";
                    // $c1->rabiscar();
                    
                    // $c1->tampar();
                    // $c1->rabiscar();
                    // print_r($c1);

                    // $c1->destampar();
                    // $c1->rabiscar();
                    // print_r($c1);

                    $c2 = new Caneta;
                    $c2->cor = "verde";
                    $c2->carga = 50;
                    $c2->tampar();
                    print_r($c2);
                    
                ?>
                
            </div>
            <div class="title_lege border_bottom">
                <p><samp>By</samp> Nildson Kleyton</p>
            </div>
        </div>
    </div>
</body>

</html>