<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css" />
    <title>Aula_PHP_ </title>
    <?php
    $start = isset($_GET["s"]) ? $_GET["s"] : 0;
    $end = isset($_GET["e"]) ? $_GET["e"] : 0;
    $incr  = isset($_GET["i"]) ? $_GET["i"] : 0;
    ?>
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
                if ($start <= $end) {
                    do {
                        echo "$start ";
                        $start += $incr;
                    }while ($start <= $end);
                } else {
                    do{
                        echo "$start ";
                        $start -= $incr;
                    }while ($start >= $end)
                }
                ?>
                </br></br>
                <button class="meu-botao" onclick="history.back()">Voltar</button>
            </div>
            <div class="title_lege border_bottom">
                <p><samp>By</samp> Nildson Kleyton</p>
            </div>
        </div>
    </div>
</body>

</html>