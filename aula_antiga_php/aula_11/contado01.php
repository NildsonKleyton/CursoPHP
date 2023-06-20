<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_css/estilo.css" />
    <title>Aula_PHP_ </title>
</head>

<body>
    <div class="div_image_php">
        <img class="image_php" src="../_imagens/php_logo1.png">
    </div>
    <div class="content_wrapper">
        <div class="main_content">
            <div class="title_lege border_top">
                <h2>Curso de PHP para iniciantes</h2>
            </div>
            <div class="center">
                 <form action="contado02.php" method="get">
                     <?php 
                     $c=1;
                     while($c <=5){
                         echo "Valor $c: <input class='spaco' type='number' name='v$c' max='100' min='0' value ='0'>";
                         echo "<br>";
                         $c++;
                        }
                     ?>

                    <input type="submit" value="Enviar" class="meu-botao"> <br>
                 </form>

            </div>
            <div class="title_lege border_bottom">
                <p><samp>By</samp> Nildson Kleyton</p>
            </div>
        </div>
    </div>
</body>

</html>