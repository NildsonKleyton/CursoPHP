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
                $i = 1; //1º while pega os dados da url
                while ($i <= 5) {
                    $v = "num" . $i;
                    $url = "v" . $i;
                    $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                    $i++;
                }
                
                //echo "$num1 $num2 $num3 $num4 $num5"; //assim fica inline

                $i = 1; //este bloco mostra os dados pegos pela url
                while ($i <= 5) {
                    $v = "num" . $i;
                    echo "Valor $i: " . $$v . "<br/>";
                    $i++;
                }
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