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
            <div class="center" >
                <?php
                $nome = "Testador";
                $novoNome = str_pad($nome, 30, ' ', STR_PAD_RIGHT);
                print "Eu sou {$novoNome} OK!";
                echo "<br>";
                $novoNome1 = str_pad($nome, 30, ' ', STR_PAD_LEFT);
                print ("Eu sou {$novoNome1} OK!");
                echo "<br>";
                
                $novoNome2 = str_pad($nome, 30, ' ', STR_PAD_BOTH );
                print ("Eu sou {$novoNome2} OK!");
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