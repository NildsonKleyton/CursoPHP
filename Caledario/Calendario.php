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
                    <select name="mes" id="mes">
                        <?php
                        // lista com os nomes dos meses
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

                        foreach ($meses as $numeroMes => $mes) { // para criar as tags option listando os meses em html
                            if ($numeroMes <> '00') {

                                echo "<option value=\"$numeroMes\" \name=\"mes\">$mes</option>";
                            } else {
                                echo "<option>$mes </option>";
                            }
                        }
                        ?>
                    </select>
                    <br>
                    <label for="ano">Informe o dia</label>
                    <select name="ano" id="ano">
                        <?php
                        echo "<option value=\"\" name=\"ano\"></option>";
                        for ($i = date("Y") - 100; $i <= date("Y"); $i++) {
                            echo "<option value=\"$i\" name=\"ano\">$i</option>";
                        }

                        ?>
                    </select>
                    <br>
                    <input type="submit" value="Enviar">
                    <br><br>
                </form>
                <?php

                /**
                 * Cria o cabeçario do calendario
                 */
                function diaSemana()
                {
                    $semana = array(1 => 'Dom', 2 => 'Seg', 3 => 'Ter', 4 => 'Qua', 5 => 'Qui', 6 => 'Sex', 7 => 'Sab');
                    $diaSemana = "<tr>";
                    foreach ($semana as $vl) {
                        $diaSemana .= "<th> $vl </th>";
                    }
                    $diaSemana .= "</tr>";
                    return $diaSemana;
                }

                function diaMes($valor)
                {
                    $diaMes = "<tr>";
                    for ($i = 1; $i <= $valor; $i++) {
                        if ($i % 7 == 0)
                            $diaMes .= "<td> $i </td></tr>\n                ";

                        else
                            $diaMes .= "<td> $i </td>";
                    }
                    return $diaMes;
                }
                $d =  date('$y-$m-$d');

                if (isset($_POST['mes'])) {
                    $mesSelecionado = $_POST['mes'];
                    if ($mesSelecionado != '00') {
                        $ultimoDiaMes = date('t', strtotime("{$mesSelecionado}/1"));
                        $mesTitulo = "<tr><td colspan=\"7\" align=\"center\"></td></tr>";
                        echo "<table>" . $mesTitulo . diaSemana() . diaMes($ultimoDiaMes) . "</table>";
                    } else {
                        echo "Por favor, selecione um mês válido.";
                    }
                }
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