<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css" />
    <title>Aula_PHP_ </title>
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
                // $nome = $_GET["nome"];
                // $ano =  $_GET["ano"];
                // $sexo = $_GET["sexo"];
                $nome = isset($_GET["nome"] ) ? $_GET["nome"] : "[nome não informado]";
                $ano =  isset($_GET["ano"]) ? $_GET["ano"] : 0;
                $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo]";
                $idade = $ano ? (int)date("Y") - (int)$ano : "[Não tem idade]";
                echo "$nome é $sexo e tem $idade anos.";
                ?>
                <a href="02exercicio.html">Voltar</a>
            </div>
            <div class="title_lege border_bottom">
                <p><samp>By</samp> Nildson Kleyton</p>
            </div>
        </div>
    </div>
</body>

</html>