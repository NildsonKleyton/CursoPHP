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
                    require_once 'Pessoa.php';
                    require_once 'Aluno.php';
                    require_once 'Profesor.php';
                    require_once 'Funcionario.php';

                    $p1 = new Pessoa();
                    $p2 = new Aluno();
                    $p3 = new Profesor();
                    $p4 = new Funcionario();

                    $p1->setNome("Pedro");
                    $p1->setIdade(30);
                    $p1->setSexo("M");


                    $p2->setNome("Maria");
                    $p3->setNome("Cláudio");
                    $p4->setNome("Marta");

                    $p2->setCurso("Informática");
                    $p3->setSalario(2500.76);
                    $p4->setSetor("Estoque");

                    print_r($p1);
                    print_r($p2);
                    print_r($p3);
                    print_r($p4);
                    
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