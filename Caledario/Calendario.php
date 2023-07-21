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
                <form method="post">
                    <label for="mes">Escolha um mês:</label>
                    <select id="mes" name="mes">
                        <?php
                        // Array com os nomes dos meses
                        $meses = array(
                            '00' => 'Selecione',
                            '01' => 'Janeiro',
                            '02' => 'Fevereiro',
                            '03' => 'Março',
                            '04' => 'Abril',
                            '05' => 'Maio',
                            '06' => 'Junho',
                            '07' => 'Julho',
                            '08' => 'Agosto',
                            '09' => 'Setembro',
                            '10' => 'Outubro',
                            '11' => 'Novembro',
                            '12' => 'Dezembro'
                        );

                        foreach ($meses as $numeroMes => $mes) {
                            $ultimo_dia = date('t', strtotime("{$numeroMes}/1"));
                            if ($numeroMes <> '00')
                                echo "<option value=\"$numeroMes\">$mes</option>";
                            else
                                echo "<option>$mes </option>";
                        }
                        ?>
                    </select>
                    <input type="submit" value="Enviar">
                </form>
                <?php
                echo "Mês ano";

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
                echo "<table>" . diaSemana() . mes(31) . "</table>";

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