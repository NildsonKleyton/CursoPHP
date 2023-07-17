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
                    require_once "Mamifero.php";
                    require_once "Peixe.php";
                    require_once "Reptil.php";
                    require_once "Ave.php";

                    require_once "Arara.php";
                    require_once "Cachorro.php";
                    require_once "Canguru.php";
                    require_once "Cobra.php";
                    require_once "GoldFish.php";
                    require_once "Tartaruga.php";

                    $m = new Mamifero;
                    $r = new Reptil;
                    $p = new Peixe;
                    $a = new Ave;

                    echo "Classe que Herdam de Animal.";

                    $m->setPeso(85.3);
                    $m->setIdade(2);
                    $m->setMembros(4);
                    $m->locomover();
                    $m->alimentar();
                    $m->emitirSom();
                    print_r($m);

                    $p->setPeso(.35);
                    $p->setIdade(1);
                    $p->setMembros(0);
                    $p->locomover();
                    $p->alimentar();
                    $p->emitirSom();
                    $p->soltarBolha();
                    print_r($p);

                    $a->setPeso(.89);
                    $a->setIdade(2);
                    $a->setMembros(2);
                    $a->locomover();
                    $a->alimentar();
                    $a->emitirSom();
                    $a->fazerNinho();
                    print_r($a);

                    echo "<hr>Classe que Herdam das Filhas de Animal.<br>";
                    echo "<br>>>>> Mamífero <<<<br><br>";
                    $cg = new Canguru;
                    $cg->locomover();
                    $cg->alimentar();
                    $cg->emitirSom();

                    $cg->usarBolsa();
                    print_r($cg);

                    $ch = new Cachorro;
                    $ch->locomover();
                    $ch->alimentar();
                    $ch->emitirSom();

                    $ch->abanandoRabo();
                    $ch->enterraOsso();
                    print_r($ch);
                    
                    echo "<br>>>> Réptil <<<<br><br>";
                    $cb = new Cobra;
                    $cb->locomover();
                    $cb->alimentar();
                    $cb->emitirSom();
                    print_r($cb);

                    $t = new Tartaruga;
                    $t->locomover();
                    $t->alimentar();
                    $t->emitirSom();
                    print_r($t);

                    $g = new GoldFish;
                    $g->locomover();
                    $g->alimentar();
                    $g->emitirSom();
                    print_r($g);

                    $ar = new Arara;
                    $ar->locomover();
                    $ar->alimentar();
                    $ar->emitirSom();
                    $ar->fazerNinho();
                    print_r($ar);

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