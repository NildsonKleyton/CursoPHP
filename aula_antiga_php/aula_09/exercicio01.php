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
                $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
                $i = date("Y") - $a;
                echo "Você nasceu em $a e tem $i anos. <br/>";

                if ($i < 16) {
                    $v = "não vota";
                    $d = "não pode dirigir";
                } elseif (($i >= 16 && $i < 18) || ($i >65)) {
                    $v = "o voto é opcional";
                    if ($i < 18)
                        $d = "não pode dirigir";
                    else
                        $d = "já pode dirigir";
                } else {
                    $v = "o voto é obrigatório";
                    $d = "já pode dirigir";
                }
                echo "Com essa idade você $v e $d.";
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