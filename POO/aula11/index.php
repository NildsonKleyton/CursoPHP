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
                require_once 'Visitante.php';
                require_once 'Aluno.php';
                require_once 'Bolsista.php';

                $v = new Visitante();
                $v->setNome("Osvaldo");
                $v->setIdade(20);
                $v->setSexo("M");

                $v->fazerAniversario();
                print_r($v);

                
                $a1 = new Aluno();
                $a1->setNome("João");
                $a1->setIdade(20);
                $a1->setSexo("Masculino");
                $a1->setMatricula(12365);
                $a1->setCurso("Java");
                $a1->pagarMensalidade();
                print_r($a1);

                $b = new Bolsista();
                $b->setMatricula(65489);
                $b->setNome("Magaiver");
                $b->setIdade(22);
                $b->setBolsa(30);
                $b->setCurso("PHP");

                $b->pagarMensalidade();
                print_r($b);



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