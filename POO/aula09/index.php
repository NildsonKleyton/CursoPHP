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
                <pre>
                    <?php
                   
                    require_once 'Pessoa.php';
                    require_once 'Livro.php';

                    $p[0] = new Pessoa("João", 20, "M");
                    $p[1] = new Pessoa("Maria", 25, "F");

                    $l[0] = new Livro("PHP Básico", "Nildson Kleyton", 300, $p[0]);
                    $l[1] = new Livro("Java Básico", "Nilndson Kleyton", 500, $p[1]);

                    // print_r($l[0]);
                    $l[0]->folhear(51);
                    $l[0]->folhear(500);
                    $l[0]->abrir();
                    $l[0]->detalhes();
                    
                    $l[1]->abrir();
                    $l[1]->detalhes();
                    

                    ?>
                </pre>
                </br></br>
            </div>
            <div class="title_lege border_bottom">
                <p><samp>By</samp> Nildson Kleyton</p>
            </div>
        </div>
    </div>
</body>

</html>