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
                <?php
                function soma()
                {
                    $p = func_get_args(); // vetor de parametro
                    $t = func_num_args(); // total
                
                    $s = 0;

                    for ($i = 0; $i < $t; $i++) {
                        $s += $p[$i];
                    }

                    return $s;
                }
                $r = soma(5, 6, 7, 8, 52,(15+58/2));


                echo "A soma é $r";
                ?>
                </br></br>
                <button class="meu-botao" onclick="Rotina.php">Voltar</button>
            </div>
            <div class="title_lege border_bottom">
                <p><samp>By</samp> Nildson Kleyton</p>
            </div>
        </div>
    </div>
</body>

</html>