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
                <h2>Curso de PHP POO</h2>
            </div>
            <div class="center">
                <pre>
                <?php
                require_once   'ContaBanco.php';

                $c1 = new ContaBanco();
                $c2 = new ContaBanco();

                $c1->abrirConta("CC");
                $c1->setNumconta(1111);
                $c1->setDono("Chico Bento");
                
                $c2->abrirConta("CP");
                $c2->setNumconta(2222);
                $c2->setDono("Maria Rosinha");
                
                print_r($c1->getSaldo()."<br>");
                print_r($c2->getSaldo());

                $c1->depositar(300);
                $c2->depositar(500);
                print_r($c1->getSaldo()."<br>");
                print_r($c2->getSaldo());
                
                $c1->sacar(50);
                $c2->sacar(150);

                $c1->pagarMensal();
                $c2->pagarMensal();
                print_r($c1->getSaldo()."<br>");
                print_r($c2->getSaldo());
                
                $c1->sacar(288);
                $c2->sacar(480);

                $c1->pagarMensal();
                print_r($c1->getSaldo()."<br>");
                
                $c1->fecharConta();
                $c2->fecharConta();
                print_r($c2->getSaldo());
                $c2->pagarMensal();

                // print_r($c1);
                // print_r($c2);

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