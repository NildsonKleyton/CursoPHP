<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css" />    <title>Aula_PHP_ </title>
</head>

<body>
    <div class="div_image_php">
        <img class="image_php" src=>
    </div>
    <div class="content_wrapper">
        <div class="main_content">
            <div class="title_lege border_top">
                <h2>Curso de PHP para iniciantes</h2>
            </div>
            <div class="center">
                <?php
                $valor = $_GET["v"];
                $raizQuadrada = number_format(sqrt($valor), 2,",");
                echo "A raiz de $valor é igual a $raizQuadrada";
                ?>
                <a href="01exercicio.html">Voltar</a>
            </div>
        </div>
        <div class="title_lege border_bottom">
            <p><samp>By</samp> Nildson Kleyton</p>
        </div>
    </div>
    </div>
</body>

</html>