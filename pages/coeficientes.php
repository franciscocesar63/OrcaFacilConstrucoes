<?php
include_once '../classes/Coeficientes.php';
$ajardinamento = filter_input(INPUT_POST, 'ajardinamento', FILTER_SANITIZE_STRING);
$area_sem_acabamento = filter_input(INPUT_POST, 'area_sem_acabamento', FILTER_SANITIZE_STRING);

//garagem
$sem_acabamento_garagem = filter_input(INPUT_POST, 'sem_acabamento_garagem', FILTER_SANITIZE_STRING);
$casa_maquinas_garagem = filter_input(INPUT_POST, 'casa_maquinas_garagem', FILTER_SANITIZE_STRING);
$garagem_circulacao_garagem = filter_input(INPUT_POST, 'garagem_circulacao_garagem', FILTER_SANITIZE_STRING);

//terreo
$sem_acabamento_terreo = filter_input(INPUT_POST, 'sem_acabamento_terreo', FILTER_SANITIZE_STRING);
$privativa_com_acabamento_terreo = filter_input(INPUT_POST, 'privativa_com_acabamento_terreo', FILTER_SANITIZE_STRING);
$privativa_sem_acabamento_terreo = filter_input(INPUT_POST, 'privativa_sem_acabamento_terreo', FILTER_SANITIZE_STRING);
$verde_terreo = filter_input(INPUT_POST, 'verde_terreo', FILTER_SANITIZE_STRING);
$casa_maquinas_terreo = filter_input(INPUT_POST, 'casa_maquinas_terreo', FILTER_SANITIZE_STRING);
$garagem_circulacao_terreo = filter_input(INPUT_POST, 'garagem_circulacao_terreo', FILTER_SANITIZE_STRING);
$quintal_terreo = filter_input(INPUT_POST, 'quintal_terreo', FILTER_SANITIZE_STRING);

//tipo
$sem_acabamento_tipo = filter_input(INPUT_POST, 'sem_acabamento_tipo', FILTER_SANITIZE_STRING);
$privativa_com_acabamento_tipo = filter_input(INPUT_POST, 'privativa_com_acabamento_tipo', FILTER_SANITIZE_STRING);
$privativa_sem_acabamento_tipo = filter_input(INPUT_POST, 'privativa_sem_acabamento_tipo', FILTER_SANITIZE_STRING);

//telhado
$sem_acabamento_telhado = filter_input(INPUT_POST, 'sem_acabamento_telhado', FILTER_SANITIZE_STRING);
$verde_telhado = filter_input(INPUT_POST, 'verde_telhado', FILTER_SANITIZE_STRING);
$casa_maquinas_telhado = filter_input(INPUT_POST, 'casa_maquinas_telhado', FILTER_SANITIZE_STRING);

//padrão
$area_benfeitoria = filter_input(INPUT_POST, 'area_benfeitoria', FILTER_SANITIZE_STRING);
$area_servico_padrao = filter_input(INPUT_POST, 'area_servico_padrao_baixo', FILTER_SANITIZE_STRING);
//$area_privativa_autonoma = filter_input(INPUT_POST, 'area_privativa_autonoma', FILTER_SANITIZE_STRING);
$area_privativa_com_acabamento = filter_input(INPUT_POST, 'area_privativa_com_acabamento', FILTER_SANITIZE_STRING);
$area_privativa_sem_acabamento = filter_input(INPUT_POST, 'area_privativa_sem_acabamento', FILTER_SANITIZE_STRING);
$area_verde = filter_input(INPUT_POST, 'area_verde', FILTER_SANITIZE_STRING);
$barrilete = filter_input(INPUT_POST, 'barrilete', FILTER_SANITIZE_STRING);
$caixa_agua = filter_input(INPUT_POST, 'caixa_agua', FILTER_SANITIZE_STRING);
$casa_maquinas = filter_input(INPUT_POST, 'casa_maquinas', FILTER_SANITIZE_STRING);
$estacionamento_terreno = filter_input(INPUT_POST, 'estacionamento_terreno', FILTER_SANITIZE_STRING);
$garagem_subsolo = filter_input(INPUT_POST, 'garagem_subsolo', FILTER_SANITIZE_STRING);
$garagem_circulacao = filter_input(INPUT_POST, 'garagem_circulacao', FILTER_SANITIZE_STRING);
$quintal = filter_input(INPUT_POST, 'quintal', FILTER_SANITIZE_STRING);
$terraco_laje = filter_input(INPUT_POST, 'terraco_laje', FILTER_SANITIZE_STRING);
$varandas = filter_input(INPUT_POST, 'varandas', FILTER_SANITIZE_STRING);

$coeficientes = new Coeficientes($ajardinamento, $area_sem_acabamento, $area_benfeitoria, $area_servico_padrao, $area_privativa_com_acabamento, $area_privativa_sem_acabamento, $area_verde, $barrilete, $caixa_agua, $casa_maquinas, $estacionamento_terreno, $garagem_subsolo, $garagem_circulacao, $quintal, $terraco_laje, $varandas);
session_start();

$_SESSION['coeficientes'] = $coeficientes;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Áreas</title>

        <link rel="stylesheet" href="../libs/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../libs/css/styles.css" type="text/css">
        <script type="text/javascript" src="../libs/js/bootstrap.js"></script>
        <script type="text/javascript" src="../libs/js/jquery.js"></script>
        <script type="text/javascript" src="../libs/js/javascript.js"></script>
    </head>


    <body>
        <?php
        include_once '../pages/navbar.php';
        ?>

        <div class="container" style="margin-top: 75px;">
            <div class="form-control">
                <button  class="btn btn-success" style="width: 33%;">Dados Iniciais</button>
                <button class="btn btn-success" style="width: 33%;" >Cômodos</button>
                <button class="btn btn-primary" style="width: 33%;" disabled="">Áreas e Coeficientes Médios</button>
            </div>
        </div>
        <div class="container" >


            <form method="POST" action="relatorio.php">

                <?php
                if ($_SESSION['isNormal'] == 'nao' && $_SESSION['GARAGEMPIS'] == 'sim') {
                    ?>
                    <center><h1 class="mt-5">Garagem</h1></center>

                    <div >
                        <?php
                        if ($sem_acabamento_garagem === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Área de laje sem acabamento</center></h4>

                                <div class="button">
                                    <input type="radio" name="sem_acabamento_garagem" value="0.4" id="a1aa5"  required=""/>
                                    <label id="radio_1" for="a1aa5" style="width: 32%;">Padrão baixo <br>(C = 0,40)</label>

                                    <input type="radio" name="sem_acabamento_garagem" value="0.5" id="b1bb5"  required=""/>
                                    <label id="radio_1" for="b1bb5" style="width: 32%;">Padrão médio <br>(C = 0,50)</label>

                                    <input type="radio" name="sem_acabamento_garagem" value="0.6" id="c1cc5" required="" />
                                    <label id="radio_1" for="c1cc5" style="width: 32%;">Padrão alto <br>(C = 0,60)</label>

                                </div>
                                <input name="area_laje_garagem" class="form-control" id="area_laje" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">


                            </div>

                            <?php
                        }
                        ?>

                        <?php
                        if ($casa_maquinas_garagem === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Casa de máquinas</center></h4>

                                <div class="button">
                                    <input type="radio" name="casa_maquinas_garagem" value="0.5" id="a10a1"  required=""/>
                                    <label id="radio_1" for="a10a1" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                                    <input type="radio" name="casa_maquinas_garagem" value="0.63" id="b10a1"  required=""/>
                                    <label id="radio_1" for="b10a1" style="width: 32%;">Padrão médio <br>(C = 0,63)</label>

                                    <input type="radio" name="casa_maquinas_garagem" value="0.75" id="c10a1" required="" />
                                    <label id="radio_1" for="c10a1" style="width: 32%;">Padrão alto <br>(C = 0,75)</label>

                                </div>
                                <input name="area_casa_maquinas_garagem" class="form-control" id="casa_maquinas" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if ($coeficientes->getGaragem_subsolo() === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Garagem (Subsolo)</center></h4>

                                <div class="button">
                                    <input type="radio" name="garagem_subsolo" value="0.50" id="a122"  required=""/>
                                    <label id="radio_1" for="a122" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                                    <input type="radio" name="garagem_subsolo" value="0.625" id="b122"  required=""/>
                                    <label id="radio_1" for="b122" style="width: 32%;">Padrão médio <br>(C = 0,625)</label>

                                    <input type="radio" name="garagem_subsolo" value="0.75" id="c122" required="" />
                                    <label id="radio_1" for="c122" style="width: 32%;">Padrão alto <br>(C = 0,75)</label>

                                </div>
                                <input name="area_garagem_subsolo" class="form-control" id="garagem_subsolo" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if ($garagem_circulacao_garagem === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Garagem ou circulação</center></h4>

                                <div class="button">
                                    <input type="radio" name="garagem_circulacao_garagem" value="0.50" id="a13a3"  required=""/>
                                    <label id="radio_1" for="a13a3" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                                    <input type="radio" name="garagem_circulacao_garagem" value="0.60" id="b13a3"  required=""/>
                                    <label id="radio_1" for="b13a3" style="width: 32%;">Padrão médio <br>(C = 0,60)</label>

                                    <input type="radio" name="garagem_circulacao_garagem" value="0.70" id="c13a3" required="" />
                                    <label id="radio_1" for="c13a3" style="width: 32%;">Padrão alto <br>(C = 0,70)</label>

                                </div>
                                <input name="area_garagem_circulacao_garagem" class="form-control" id="garagem_circulacao" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>
                    </div>



                <?php } ?>

                <?php
                if ($_SESSION['isNormal'] == 'nao') {
                    ?>
                    <center><h1 class="mt-5">Térreo ou Pilotis</h1></center>


                    <div >

                        <?php
                        if ($coeficientes->getAjardinamento() === "ON") {
                            ?>

                            <div class="container">
                                <h4><center>Ajardinamento</center></h4>

                                <div class="button">
                                    <input type="radio" name="ajardinamento" value="0.3" id="a"  required=""/>
                                    <label id="radio_1" for="a" style="width: 32%;">Padrão baixo <br>(C = 0,30)</label>

                                    <input type="radio" name="ajardinamento" value="0.4" id="b"  required=""/>
                                    <label id="radio_1" for="b" style="width: 32%;">Padrão médio <br>(C = 0,40)</label>

                                    <input type="radio" name="ajardinamento" value="0.5" id="c" required="" />
                                    <label id="radio_1" for="c" style="width: 32%;">Padrão alto <br>(C = 0,50)</label>

                                </div>
                                <input name="area_ajardinamento" class="form-control" id="area_ajardinamento" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">


                            </div>

                            <?php
                        }
                        ?>


                        <?php
                        if ($sem_acabamento_terreo === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Área de laje sem acabamento</center></h4>

                                <div class="button">
                                    <input type="radio" name="sem_acabamento_terreo" value="0.4" id="a1a4"  required=""/>
                                    <label id="radio_1" for="a1a4" style="width: 32%;">Padrão baixo <br>(C = 0,40)</label>

                                    <input type="radio" name="sem_acabamento_terreo" value="0.5" id="b1b4"  required=""/>
                                    <label id="radio_1" for="b1b4" style="width: 32%;">Padrão médio <br>(C = 0,50)</label>

                                    <input type="radio" name="sem_acabamento_terreo" value="0.6" id="c1c4" required="" />
                                    <label id="radio_1" for="c1c4" style="width: 32%;">Padrão alto <br>(C = 0,60)</label>

                                </div>
                                <input name="area_laje_terreo" class="form-control" id="area_laje_terreo" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">


                            </div>

                            <?php
                        }
                        ?>

                        <?php
                        if ($coeficientes->getArea_benfeitoria() === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Área de projeção do terreno sem benfeitoria</center></h4>

                                <div class="button">
                                    <input type="radio" name="benfeitoria" value="0" id="b2"  required=""/>
                                    <label id="radio_1" for="b2" style="width: 100%;">Padrão<br>(C = 0)</label>

                                </div>
                                <input name="area_benfeitoria" class="form-control" id="area_benfeitoria" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">


                            </div>

                            <?php
                        }
                        ?>

                        <?php
                        if ($privativa_com_acabamento_terreo === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Área privativa salas com acabamento</center></h4>

                                <div class="button">
                                    <input type="radio" name="privativa_com_acabamento_terreo" value="1" id="a5asdf"  required=""/>
                                    <label id="radio_1" for="a5asdf" style="width: 100%;">Padrão <br>(C = 1,00)</label>

                                </div>
                                <input name="area_privativa_com_acabamento_terreo" class="form-control" id="area_privativa_com_acabamento" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if ($privativa_sem_acabamento_terreo === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Área privativa salas sem acabamento</center></h4>

                                <div class="button">
                                    <input type="radio" name="privativa_sem_acabamento_terreo" value="0.75" id="a6a5"  required=""/>
                                    <label id="radio_1" for="a6a5" style="width: 32%;">Padrão baixo <br>(C = 0,75)</label>

                                    <input type="radio" name="privativa_sem_acabamento_terreo" value="0.83" id="b6a5"  required=""/>
                                    <label id="radio_1" for="b6a5" style="width: 32%;">Padrão médio <br>(C = 0,83)</label>

                                    <input type="radio" name="privativa_sem_acabamento_terreo" value="0.9" id="c6a5" required="" />
                                    <label id="radio_1" for="c6a5" style="width: 32%;">Padrão alto <br>(C = 0,90)</label>

                                </div>
                                <input name="area_privativa_sem_acabamento_terreo" class="form-control" id="area_privativa_sem_acabamento" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        if ($verde_terreo === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Área Verde e outros</center></h4>

                                <div class="button">
                                    <input type="radio" name="verde_terreo" value="0.15" id="a7a6"  required=""/>
                                    <label id="radio_1" for="a7a6" style="width: 32%;">Padrão baixo <br>(C = 0,15)</label>

                                    <input type="radio" name="verde_terreo" value="0.20" id="b7a6"  required=""/>
                                    <label id="radio_1" for="b7a6" style="width: 32%;">Padrão médio <br>(C = 0,20)</label>

                                    <input type="radio" name="verde_terreo" value="0.25" id="c7a6" required="" />
                                    <label id="radio_1" for="c7a6" style="width: 32%;">Padrão alto <br>(C = 0,25)</label>

                                </div>
                                <input name="area_verde_terreo" class="form-control" id="area_verde" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        if ($coeficientes->getEstacionamento_terreno() === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Estacionamento sobre terreno</center></h4>

                                <div class="button">
                                    <input type="radio" name="estacionamento_terreno" value="0.05" id="a117"  required=""/>
                                    <label id="radio_1" for="a117" style="width: 32%;">Padrão baixo <br>(C = 0,05)</label>

                                    <input type="radio" name="estacionamento_terreno" value="0.075" id="b117"  required=""/>
                                    <label id="radio_1" for="b117" style="width: 32%;">Padrão médio <br>(C = 0,075)</label>

                                    <input type="radio" name="estacionamento_terreno" value="0.1" id="c117" required="" />
                                    <label id="radio_1" for="c117" style="width: 32%;">Padrão alto <br>(C = 0,10)</label>

                                </div>
                                <input name="area_estacionamento_terreno" class="form-control" id="estacionamento_terreno" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        if ($casa_maquinas_terreo === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Casa de máquinas</center></h4>

                                <div class="button">
                                    <input type="radio" name="casa_maquinas_terreo" value="0.5" id="a10a8"  required=""/>
                                    <label id="radio_1" for="a10a8" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                                    <input type="radio" name="casa_maquinas_terreo" value="0.63" id="b10a8"  required=""/>
                                    <label id="radio_1" for="b10a8" style="width: 32%;">Padrão médio <br>(C = 0,63)</label>

                                    <input type="radio" name="casa_maquinas_terreo" value="0.75" id="c10a8" required="" />
                                    <label id="radio_1" for="c10a8" style="width: 32%;">Padrão alto <br>(C = 0,75)</label>

                                </div>
                                <input name="area_casa_maquinas_terreo" class="form-control" id="casa_maquinas" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        if ($garagem_circulacao_terreo === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Garagem ou circulação</center></h4>

                                <div class="button">
                                    <input type="radio" name="garagem_circulacao_terreo" value="0.50" id="a13a9"  required=""/>
                                    <label id="radio_1" for="a13a9" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                                    <input type="radio" name="garagem_circulacao_terreo" value="0.60" id="b13a9"  required=""/>
                                    <label id="radio_1" for="b13a9" style="width: 32%;">Padrão médio <br>(C = 0,60)</label>

                                    <input type="radio" name="garagem_circulacao_terreo" value="0.70" id="c13a9" required="" />
                                    <label id="radio_1" for="c13a9" style="width: 32%;">Padrão alto <br>(C = 0,70)</label>

                                </div>
                                <input name="area_garagem_circulacao_terreo" class="form-control" id="garagem_circulacao" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        if ($quintal_terreo === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Piscinas, quintais, entre outros</center></h4>

                                <div class="button">
                                    <input type="radio" name="quintal_terreo" value="0.50" id="a14ab"  required=""/>
                                    <label id="radio_1" for="a14ab" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                                    <input type="radio" name="quintal_terreo" value="0.625" id="b14ab"  required=""/>
                                    <label id="radio_1" for="b14ab" style="width: 32%;">Padrão médio <br>(C = 0,625)</label>

                                    <input type="radio" name="quintal_terreo" value="0.75" id="c14ab" required="" />
                                    <label id="radio_1" for="c14ab" style="width: 32%;">Padrão alto <br>(C = 0,75)</label>

                                </div>
                                <input name="area_quintal_terreo" class="form-control" id="quintal" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>




                    </div>




                <?php } ?>

                <?php
                if ($_SESSION['isNormal'] == 'nao') {
                    ?>

                    <center><h1 class="mt-5">Pavimentos Tipo</h1></center>

                    <div >


                        <?php
                        if ($coeficientes->getArea_servico_padrao() === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Área de serviço - residência unifamiliar padrão baixo (aberta)</center></h4>

                                <div class="button">
                                    <input type="radio" name="servico_padrao" value="0.5" id="b3"  required=""/>
                                    <label id="radio_1" for="b3" style="width: 100%;">Padrão<br>(C = 0,50)</label>

                                </div>
                                <input name="area_servico_padrao" class="form-control" id="area_servico_padrao" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">


                            </div>

                            <?php
                        }
                        ?>

                        <?php
                        if ($sem_acabamento_tipo === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Área de laje sem acabamento</center></h4>

                                <div class="button">
                                    <input type="radio" name="sem_acabamento_tipo" value="0.4" id="a1dc"  required=""/>
                                    <label id="radio_1" for="a1dc" style="width: 32%;">Padrão baixo <br>(C = 0,40)</label>

                                    <input type="radio" name="sem_acabamento_tipo" value="0.5" id="b1ec"  required=""/>
                                    <label id="radio_1" for="b1ec" style="width: 32%;">Padrão médio <br>(C = 0,50)</label>

                                    <input type="radio" name="sem_acabamento_tipo" value="0.6" id="c1fc" required="" />
                                    <label id="radio_1" for="c1fc" style="width: 32%;">Padrão alto <br>(C = 0,60)</label>

                                </div>
                                <input name="area_laje_tipo" class="form-control" id="area_laje_tipo" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">


                            </div>

                            <?php
                        }
                        ?>
                        <?php
                        if ($privativa_com_acabamento_tipo === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Área privativa salas com acabamento</center></h4>

                                <div class="button">
                                    <input type="radio" name="privativa_com_acabamento_tipo" value="1" id="a5ad"  required=""/>
                                    <label id="radio_1" for="a5ad" style="width: 100%;">Padrão <br>(C = 1,00)</label>

                                </div>
                                <input name="area_privativa_com_acabamento_tipo" class="form-control" id="area_privativa_com_acabamento" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if ($privativa_sem_acabamento_tipo === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Área privativa salas sem acabamento</center></h4>

                                <div class="button">
                                    <input type="radio" name="privativa_sem_acabamento_tipo" value="0.75" id="a6ae"  required=""/>
                                    <label id="radio_1" for="a6ae" style="width: 32%;">Padrão baixo <br>(C = 0,75)</label>

                                    <input type="radio" name="privativa_sem_acabamento_tipo" value="0.83" id="b6ae"  required=""/>
                                    <label id="radio_1" for="b6ae" style="width: 32%;">Padrão médio <br>(C = 0,83)</label>

                                    <input type="radio" name="privativa_sem_acabamento_tipo" value="0.9" id="c6ae" required="" />
                                    <label id="radio_1" for="c6ae" style="width: 32%;">Padrão alto <br>(C = 0,90)</label>

                                </div>
                                <input name="area_privativa_sem_acabamento_tipo" class="form-control" id="area_privativa_sem_acabamento" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if ($coeficientes->getVarandas() === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Varandas</center></h4>

                                <div class="button">
                                    <input type="radio" name="varandas" value="0.75" id="a16"  required=""/>
                                    <label id="radio_1" for="a16" style="width: 32%;">Padrão baixo <br>(C = 0,75)</label>

                                    <input type="radio" name="varandas" value="0.875" id="b16"  required=""/>
                                    <label id="radio_1" for="b16" style="width: 32%;">Padrão médio <br>(C = 0,875)</label>

                                    <input type="radio" name="varandas" value="1" id="c16" required="" />
                                    <label id="radio_1" for="c16" style="width: 32%;">Padrão alto <br>(C = 1,00)</label>

                                </div>
                                <input name="area_varandas" class="form-control" id="varandas" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>

                    </div>

                <?php } ?>

                <?php
                if ($_SESSION['isNormal'] == 'nao') {
                    ?>
                    <center><h1 class="mt-5">Cobertura</h1></center>

                    <div > 
                        <?php
                        if ($sem_acabamento_telhado === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Área de laje sem acabamento</center></h4>

                                <div class="button">
                                    <input type="radio" name="sem_acabamento_telhado" value="0.4" id="adsgasd"  required=""/>
                                    <label id="radio_1" for="adsgasd" style="width: 32%;">Padrão baixo <br>(C = 0,40)</label>

                                    <input type="radio" name="sem_acabamento_telhado" value="0.5" id="adsgasd1"  required=""/>
                                    <label id="radio_1" for="adsgasd1" style="width: 32%;">Padrão médio <br>(C = 0,50)</label>

                                    <input type="radio" name="sem_acabamento_telhado" value="0.6" id="adsgasd12" required="" />
                                    <label id="radio_1" for="adsgasd12" style="width: 32%;">Padrão alto <br>(C = 0,60)</label>

                                </div>
                                <input name="area_laje_telhado" class="form-control" id="area_laje_telhado" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>

                            <?php
                        }
                        ?>


                        <?php
                        if ($verde_telhado === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Área Verde e outros</center></h4>

                                <div class="button">
                                    <input type="radio" name="verde_telhado" value="0.15" id="a7ah"  required=""/>
                                    <label id="radio_1" for="a7ah" style="width: 32%;">Padrão baixo <br>(C = 0,15)</label>

                                    <input type="radio" name="verde_telhado" value="0.20" id="b7ah"  required=""/>
                                    <label id="radio_1" for="b7ah" style="width: 32%;">Padrão médio <br>(C = 0,20)</label>

                                    <input type="radio" name="verde_telhado" value="0.25" id="c7ah" required="" />
                                    <label id="radio_1" for="c7ah" style="width: 32%;">Padrão alto <br>(C = 0,25)</label>

                                </div>
                                <input name="area_verde_telhado" class="form-control" id="area_verde" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if ($casa_maquinas_telhado === "ON") {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Casa de máquinas</center></h4>

                                <div class="button">
                                    <input type="radio" name="casa_maquinas_telhado" value="0.5" id="a10ai"  required=""/>
                                    <label id="radio_1" for="a10ai" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                                    <input type="radio" name="casa_maquinas_telhado" value="0.63" id="b10ai"  required=""/>
                                    <label id="radio_1" for="b10ai" style="width: 32%;">Padrão médio <br>(C = 0,63)</label>

                                    <input type="radio" name="casa_maquinas_telhado" value="0.75" id="c10ai" required="" />
                                    <label id="radio_1" for="c10ai" style="width: 32%;">Padrão alto <br>(C = 0,75)</label>

                                </div>
                                <input name="area_casa_maquinas_telhado" class="form-control" id="casa_maquinas" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if ($coeficientes->getCaixa_agua() === "ON" && $_SESSION['isNormal'] != 'nao') {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Caixa d'água</center></h4>

                                <div class="button">
                                    <input type="radio" name="caixa_agua" value="0.5" id="a9"  required=""/>
                                    <label id="radio_1" for="a9" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                                    <input type="radio" name="caixa_agua" value="0.63" id="b9"  required=""/>
                                    <label id="radio_1" for="b9" style="width: 32%;">Padrão médio <br>(C = 0,63)</label>

                                    <input type="radio" name="caixa_agua" value="0.75" id="c9" required="" />
                                    <label id="radio_1" for="c9" style="width: 32%;">Padrão alto <br>(C = 0,75)</label>

                                </div>
                                <input name="area_caixa_agua" class="form-control" id="caixa_agua" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if ($coeficientes->getTerraco_laje() === "ON" && $_SESSION['isNormal'] != 'nao') {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Terraços ou áreas descobertas sobre lajes</center></h4>

                                <div class="button">
                                    <input type="radio" name="terraco_laje" value="0.30" id="a15"  required=""/>
                                    <label id="radio_1" for="a15" style="width: 32%;">Padrão baixo <br>(C = 0,30)</label>

                                    <input type="radio" name="terraco_laje" value="0.45" id="b15"  required=""/>
                                    <label id="radio_1" for="b15" style="width: 32%;">Padrão médio <br>(C = 0,45)</label>

                                    <input type="radio" name="terraco_laje" value="0.60" id="c15" required="" />
                                    <label id="radio_1" for="c15" style="width: 32%;">Padrão alto <br>(C = 0,60)</label>

                                </div>
                                <input name="area_terraco_laje" class="form-control" id="terraco_laje" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        if ($coeficientes->getBarrilete() === "ON" && $_SESSION['isNormal'] != 'nao') {
                            ?>

                            <br>
                            <div class="container">
                                <h4><center>Barrilete</center></h4>

                                <div class="button">
                                    <input type="radio" name="barrilete" value="0.5" id="a8"  required=""/>
                                    <label id="radio_1" for="a8" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                                    <input type="radio" name="barrilete" value="0.63" id="b8"  required=""/>
                                    <label id="radio_1" for="b8" style="width: 32%;">Padrão médio <br>(C = 0,63)</label>

                                    <input type="radio" name="barrilete" value="0.75" id="c8" required="" />
                                    <label id="radio_1" for="c8" style="width: 32%;">Padrão alto <br>(C = 0,75)</label>

                                </div>
                                <input name="area_barrilete" class="form-control" id="barrilete" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                            </div>
                            <?php
                        }
                        ?>
                    </div>

                <?php } ?>


                <br>
                <?php
                if ($coeficientes->getAjardinamento() === "ON" && $_SESSION['isNormal'] != 'nao') {
                    ?>

                    <div class="container">
                        <h4><center>Ajardinamento</center></h4>

                        <div class="button">
                            <input type="radio" name="ajardinamento" value="0.3" id="a"  required=""/>
                            <label id="radio_1" for="a" style="width: 32%;">Padrão baixo <br>(C = 0,30)</label>

                            <input type="radio" name="ajardinamento" value="0.4" id="b"  required=""/>
                            <label id="radio_1" for="b" style="width: 32%;">Padrão médio <br>(C = 0,40)</label>

                            <input type="radio" name="ajardinamento" value="0.5" id="c" required="" />
                            <label id="radio_1" for="c" style="width: 32%;">Padrão alto <br>(C = 0,50)</label>

                        </div>
                        <input name="area_ajardinamento" class="form-control" id="area_ajardinamento" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">


                    </div>

                    <?php
                }
                ?>
                <?php
                if ($coeficientes->getArea_sem_acabamento() === "ON") {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Área de laje sem acabamento</center></h4>

                        <div class="button">
                            <input type="radio" name="area_sem_acabamento" value="0.4" id="a1"  required=""/>
                            <label id="radio_1" for="a1" style="width: 32%;">Padrão baixo <br>(C = 0,40)</label>

                            <input type="radio" name="area_sem_acabamento" value="0.5" id="b1"  required=""/>
                            <label id="radio_1" for="b1" style="width: 32%;">Padrão médio <br>(C = 0,50)</label>

                            <input type="radio" name="area_sem_acabamento" value="0.6" id="c1" required="" />
                            <label id="radio_1" for="c1" style="width: 32%;">Padrão alto <br>(C = 0,60)</label>

                        </div>
                        <input name="area_laje" class="form-control" id="area_laje" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">


                    </div>

                    <?php
                }
                ?>










                <?php
                if ($coeficientes->getArea_benfeitoria() === "ON" && $_SESSION['isNormal'] != 'nao') {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Área de projeção do terreno sem benfeitoria</center></h4>

                        <div class="button">
                            <input type="radio" name="benfeitoria" value="0" id="b2"  required=""/>
                            <label id="radio_1" for="b2" style="width: 100%;">Padrão<br>(C = 0)</label>

                        </div>
                        <input name="area_benfeitoria" class="form-control" id="area_benfeitoria" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">


                    </div>

                    <?php
                }
                ?>

                <?php
                if ($coeficientes->getArea_servico_padrao() === "ON" && $_SESSION['isNormal'] != 'nao') {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Área de serviço - residência unifamiliar padrão baixo (aberta)</center></h4>

                        <div class="button">
                            <input type="radio" name="servico_padrao" value="0.5" id="b3"  required=""/>
                            <label id="radio_1" for="b3" style="width: 100%;">Padrão<br>(C = 0,50)</label>

                        </div>
                        <input name="area_servico_padrao" class="form-control" id="area_servico_padrao" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">


                    </div>

                    <?php
                }
                ?>


                <?php
                if ($coeficientes->getArea_privativa_com_acabamento() === "ON") {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Área privativa salas com acabamento</center></h4>

                        <div class="button">
                            <input type="radio" name="privativa_com_acabamento" value="1" id="a5"  required=""/>
                            <label id="radio_1" for="a5" style="width: 100%;">Padrão <br>(C = 1,00)</label>

                        </div>
                        <input name="area_privativa_com_acabamento" class="form-control" id="area_privativa_com_acabamento" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                    </div>
                    <?php
                }
                ?>
                <?php
                if ($coeficientes->getArea_privativa_sem_acabamento() === "ON") {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Área privativa salas sem acabamento</center></h4>

                        <div class="button">
                            <input type="radio" name="sem_acabamento" value="0.75" id="a6"  required=""/>
                            <label id="radio_1" for="a6" style="width: 32%;">Padrão baixo <br>(C = 0,75)</label>

                            <input type="radio" name="sem_acabamento" value="0.83" id="b6"  required=""/>
                            <label id="radio_1" for="b6" style="width: 32%;">Padrão médio <br>(C = 0,83)</label>

                            <input type="radio" name="sem_acabamento" value="0.9" id="c6" required="" />
                            <label id="radio_1" for="c6" style="width: 32%;">Padrão alto <br>(C = 0,90)</label>

                        </div>
                        <input name="area_privativa_sem_acabamento" class="form-control" id="area_privativa_sem_acabamento" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                    </div>
                    <?php
                }
                ?>




                <?php
                if ($coeficientes->getArea_verde() === "ON") {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Área Verde e outros</center></h4>

                        <div class="button">
                            <input type="radio" name="verde" value="0.15" id="a7"  required=""/>
                            <label id="radio_1" for="a7" style="width: 32%;">Padrão baixo <br>(C = 0,15)</label>

                            <input type="radio" name="verde" value="0.20" id="b7"  required=""/>
                            <label id="radio_1" for="b7" style="width: 32%;">Padrão médio <br>(C = 0,20)</label>

                            <input type="radio" name="verde" value="0.25" id="c7" required="" />
                            <label id="radio_1" for="c7" style="width: 32%;">Padrão alto <br>(C = 0,25)</label>

                        </div>
                        <input name="area_verde" class="form-control" id="area_verde" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                    </div>
                    <?php
                }
                ?>
                <?php
                if ($coeficientes->getBarrilete() === "ON") {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Barrilete</center></h4>

                        <div class="button">
                            <input type="radio" name="barrilete" value="0.5" id="a8"  required=""/>
                            <label id="radio_1" for="a8" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                            <input type="radio" name="barrilete" value="0.63" id="b8"  required=""/>
                            <label id="radio_1" for="b8" style="width: 32%;">Padrão médio <br>(C = 0,63)</label>

                            <input type="radio" name="barrilete" value="0.75" id="c8" required="" />
                            <label id="radio_1" for="c8" style="width: 32%;">Padrão alto <br>(C = 0,75)</label>

                        </div>
                        <input name="area_barrilete" class="form-control" id="barrilete" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                    </div>
                    <?php
                }
                ?>

                <?php
                if ($coeficientes->getCaixa_agua() === "ON") {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Caixa d'água</center></h4>

                        <div class="button">
                            <input type="radio" name="caixa_agua" value="0.5" id="a9"  required=""/>
                            <label id="radio_1" for="a9" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                            <input type="radio" name="caixa_agua" value="0.63" id="b9"  required=""/>
                            <label id="radio_1" for="b9" style="width: 32%;">Padrão médio <br>(C = 0,63)</label>

                            <input type="radio" name="caixa_agua" value="0.75" id="c9" required="" />
                            <label id="radio_1" for="c9" style="width: 32%;">Padrão alto <br>(C = 0,75)</label>

                        </div>
                        <input name="area_caixa_agua" class="form-control" id="caixa_agua" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                    </div>
                    <?php
                }
                ?>
                <?php
                if ($coeficientes->getCasa_maquinas() === "ON") {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Casa de máquinas</center></h4>

                        <div class="button">
                            <input type="radio" name="casa_maquinas" value="0.5" id="a10"  required=""/>
                            <label id="radio_1" for="a10" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                            <input type="radio" name="casa_maquinas" value="0.63" id="b10"  required=""/>
                            <label id="radio_1" for="b10" style="width: 32%;">Padrão médio <br>(C = 0,63)</label>

                            <input type="radio" name="casa_maquinas" value="0.75" id="c10" required="" />
                            <label id="radio_1" for="c10" style="width: 32%;">Padrão alto <br>(C = 0,75)</label>

                        </div>
                        <input name="area_casa_maquinas" class="form-control" id="casa_maquinas" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                    </div>
                    <?php
                }
                ?>




                <?php
                if ($coeficientes->getEstacionamento_terreno() === "ON") {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Estacionamento sobre terreno</center></h4>

                        <div class="button">
                            <input type="radio" name="estacionamento_terreno" value="0.05" id="a11"  required=""/>
                            <label id="radio_1" for="a11" style="width: 32%;">Padrão baixo <br>(C = 0,05)</label>

                            <input type="radio" name="estacionamento_terreno" value="0.075" id="b11"  required=""/>
                            <label id="radio_1" for="b11" style="width: 32%;">Padrão médio <br>(C = 0,075)</label>

                            <input type="radio" name="estacionamento_terreno" value="0.1" id="c11" required="" />
                            <label id="radio_1" for="c11" style="width: 32%;">Padrão alto <br>(C = 0,10)</label>

                        </div>
                        <input name="area_estacionamento_terreno" class="form-control" id="estacionamento_terreno" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                    </div>
                    <?php
                }
                ?>


                <?php
                if ($coeficientes->getGaragem_subsolo() === "ON" && $_SESSION['isNormal'] != 'nao') {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Garagem (Subsolo)</center></h4>

                        <div class="button">
                            <input type="radio" name="garagem_subsolo" value="0.50" id="a12"  required=""/>
                            <label id="radio_1" for="a12" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                            <input type="radio" name="garagem_subsolo" value="0.625" id="b12"  required=""/>
                            <label id="radio_1" for="b12" style="width: 32%;">Padrão médio <br>(C = 0,625)</label>

                            <input type="radio" name="garagem_subsolo" value="0.75" id="c12" required="" />
                            <label id="radio_1" for="c12" style="width: 32%;">Padrão alto <br>(C = 0,75)</label>

                        </div>
                        <input name="area_garagem_subsolo" class="form-control" id="garagem_subsolo" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                    </div>
                    <?php
                }
                ?>
                <?php
                if ($coeficientes->getGaragem_circulacao() === "ON") {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Garagem ou circulação</center></h4>

                        <div class="button">
                            <input type="radio" name="garagem_circulacao" value="0.50" id="a13"  required=""/>
                            <label id="radio_1" for="a13" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                            <input type="radio" name="garagem_circulacao" value="0.60" id="b13"  required=""/>
                            <label id="radio_1" for="b13" style="width: 32%;">Padrão médio <br>(C = 0,60)</label>

                            <input type="radio" name="garagem_circulacao" value="0.70" id="c13" required="" />
                            <label id="radio_1" for="c13" style="width: 32%;">Padrão alto <br>(C = 0,70)</label>

                        </div>
                        <input name="area_garagem_circulacao" class="form-control" id="garagem_circulacao" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                    </div>
                    <?php
                }
                ?>
                <?php
                if ($coeficientes->getQuintal() === "ON") {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Piscinas, quintais, entre outros</center></h4>

                        <div class="button">
                            <input type="radio" name="quintal" value="0.50" id="a14"  required=""/>
                            <label id="radio_1" for="a14" style="width: 32%;">Padrão baixo <br>(C = 0,50)</label>

                            <input type="radio" name="quintal" value="0.625" id="b14"  required=""/>
                            <label id="radio_1" for="b14" style="width: 32%;">Padrão médio <br>(C = 0,625)</label>

                            <input type="radio" name="quintal" value="0.75" id="c14" required="" />
                            <label id="radio_1" for="c14" style="width: 32%;">Padrão alto <br>(C = 0,75)</label>

                        </div>
                        <input name="area_quintal" class="form-control" id="quintal" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                    </div>
                    <?php
                }
                ?>

                <?php
                if ($coeficientes->getTerraco_laje() === "ON") {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Terraços ou áreas descobertas sobre lajes</center></h4>

                        <div class="button">
                            <input type="radio" name="terraco_laje" value="0.30" id="a15"  required=""/>
                            <label id="radio_1" for="a15" style="width: 32%;">Padrão baixo <br>(C = 0,30)</label>

                            <input type="radio" name="terraco_laje" value="0.45" id="b15"  required=""/>
                            <label id="radio_1" for="b15" style="width: 32%;">Padrão médio <br>(C = 0,45)</label>

                            <input type="radio" name="terraco_laje" value="0.60" id="c15" required="" />
                            <label id="radio_1" for="c15" style="width: 32%;">Padrão alto <br>(C = 0,60)</label>

                        </div>
                        <input name="area_terraco_laje" class="form-control" id="terraco_laje" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                    </div>
                    <?php
                }
                ?>


                <?php
                if ($coeficientes->getVarandas() === "ON" && $_SESSION['isNormal'] != 'nao') {
                    ?>

                    <br>
                    <div class="container">
                        <h4><center>Varandas</center></h4>

                        <div class="button">
                            <input type="radio" name="varandas" value="0.75" id="a16"  required=""/>
                            <label id="radio_1" for="a16" style="width: 32%;">Padrão baixo <br>(C = 0,75)</label>

                            <input type="radio" name="varandas" value="0.875" id="b16"  required=""/>
                            <label id="radio_1" for="b16" style="width: 32%;">Padrão médio <br>(C = 0,875)</label>

                            <input type="radio" name="varandas" value="1" id="c16" required="" />
                            <label id="radio_1" for="c16" style="width: 32%;">Padrão alto <br>(C = 1,00)</label>

                        </div>
                        <input name="area_varandas" class="form-control" id="varandas" type="number" placeholder="Área do cômodo (m²)" style="margin-top: 10px;" step="0.0000001" required="">
                    </div>
                    <?php
                }
                ?>




                <!--</div>-->

                <!--</div>-->
                <br>
                <center><button class="btn btn-primary" type="submit" onclick="">Gerar relatório</button></center>
            </form>






        </div>

        <?php
        $orcamento_session = $_SESSION['orcamento'];
//        var_dump($orcamento_session);
        ?>


    </body>
</html>
