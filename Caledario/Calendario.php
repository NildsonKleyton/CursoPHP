<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../POO/_css/estilo.css" />
    <title>Aula_PHP_ </title>
</head>

<body>
    <div class="div_image_php">
        <img class="image_php" src="../POO/_imagens/php_logo.png">
    </div>
    <div class="content_wrapper">
        <div class="main_content">
            <div class="title_lege border_top">
                <h2>Curso de PHP para iniciantes</h2>
            </div>
            <div class="center">
                <?php
                echo "Mês";

                function diaSemana()
                {
                    $semana = array("Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sab");
                    $diaSemana = "<tr>";
                    for ($i = 0; $i < count($semana); $i++) {
                        $diaSemana .= "<th> $semana[$i] </th>";
                    }
                    $diaSemana .= "</tr>";
                    return $diaSemana;
                }
                function mes($valor)
                {
                    $diaMes = "<tr>";
                    for ($i = 1; $i <= $valor; $i++) {
                        if ($i % 7 == 0) $diaMes .= "<td> $i </td></tr>";
                        else $diaMes .= "<td> $i </td>";
                    }
                    return $diaMes;
                }
                echo "<table>" . diaSemana(). mes(31)."</table>";

                ?>
                </br></br>
            </div>
            <div class="title_lege border_bottom">
                <p><samp>By</samp> Nildson Kleyton</p>
            </div>
        </div>
    </div>
</body>

</html>