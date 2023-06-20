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
                //media <5=reprovado, >5 <7= recuperação, >7= aprovado
                $n1 = isset($_GET["n1"]) ? $_GET["n1"] : "0";
                $n2 = isset($_GET["n2"]) ? $_GET["n2"] : "0";
                $media = ((int)$n1 + (int)$n2) / 2;

                if ($media < 5)
                    $resultado = "REPROVADO";
                elseif ($media < 7)
                    $resultado = "RECUPERAÇÃO";
                else
                    $resultado = "APROVADO";

                echo "A média entre $n1 e $n2 é igual a $media <br>";
                echo "Situação do aluno: $resultado";
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