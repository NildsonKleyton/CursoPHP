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
                    include_once "funcoes.php";

                    // função por parametro
                    function paramentroValor ($x){
                        $x += 2;
                        echo "<p>O valor de X é $x</p>";
                    }
                    $a = 3;
                    mostraValor($a);
                    paramentroValor($a);
                    echo "<p>O valor de A é $a</p>";
                    echo"<hr>";
                    
                    // função por referencia
                    function referencia(&$x){
                        $x += 2;
                        echo "<p>O valor de X é $x</p>";
                    }

                    $a = 3;
                    mostraValor($a);
                    referencia($a);
                    echo "<p>O valor de A é $a</p>";

                

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