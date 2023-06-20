<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css" />
    <title>Aula_PHP_ </title>
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
                $n = isset($_GET["num"]) ? $_GET["num"] : 0;
                $op = isset($_GET["oper"]) ? $_GET["oper"] : 1;
                switch ($op) {
                    case 1:
                        $resp = $n * 2;
                        break;
                    case 2:
                        $resp = pow($n,3);//$n ^ 3
                        break;
                    case 3:
                        $resp = sqrt($n ); // ou $num ^(1/2) " 0,5
                }
                echo "Oresultado da operação foi <spam Class =\"destaque\">$resp</samp>";

                ?>
                </br></br>
                <button class="meu-botao" onclick="history.back()">Voltar</button>
            </div>
            <samp>
            <div class="title_lege border_bottom">
                <p><samp>By</samp> Nildson Kleyton</p>
            </div>
        </div>
    </div>
</body>

</html>