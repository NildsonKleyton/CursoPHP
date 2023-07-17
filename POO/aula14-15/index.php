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
                <pre>
                <?php
                require_once 'Video.php';
                require_once 'Gafanhoto.php';
                require_once 'Visualizacao.php';


                $v[0] = new Video("Aula de Java");
                $v[0]->play();
                $v[0]->like();

                $v[0]->play();
                $v[0]->like();

                $v[1] = new Video("Aula de PHP");
                $v[1]->play();
                $v[1]->like();

                $g[0] = new Gafanhoto('João', 25, 'Masculino', 'joao123');
                $g[1] = new Gafanhoto("Maria", 34, "Feminino", "Mariazinha");

                //  print_r($v);
                //  print_r($g);

                $vis[0] = new Visualizacao($g[0], $v[0]);
                $v[0]->like();
                $vis[1] = new Visualizacao($g[0], $v[1]);

                $vis[0]->avaliar();
                $vis[1]->avaliarPorc(85);
             


                print_r($vis);

                ?>
                </pre>
            </div>
            <div class="title_lege border_bottom">
                <p><samp>By</samp> Nildson Kleyton</p>
            </div>
        </div>
    </div>
</body>

</html>