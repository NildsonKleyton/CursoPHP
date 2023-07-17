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
                require_once "Lobo.php";
                require_once "Cachorro.php";

                $l=new Lobo;
                $c=new Cachorro;

                $l->emitirSom();
                $c->emitirSom();

                
                $c->reagirFrase("Olá");
                $c->reagirFrase("Vai apanhar");

                $c->reagirHora(11,45);
                $c->reagirHora(21,00);

                
                $c->reagirDono(true);
                $c->reagirDono(false);
                
                $c->reagirIdadePeso(2,12.2);
                $c->reagirIdadePeso(17,4.2);
                
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