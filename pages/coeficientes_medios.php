<html>
    <head>
        <meta charset="UTF-8">
        <title>Orçamento</title>

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
                <button class="btn btn-success" style="width: 33%;">Dados Iniciais</button>
                <button class="btn btn-primary" style="width: 33%;" >Coeficientes Médios</button>
                <button class="btn btn-secondary" style="width: 33%;" disabled="">Dados Iniciais</button>
            </div>

            <?php
            include_once '../classes/Orcamento.php';
            $nome_obra = filter_input(INPUT_GET, 'nome_obra', FILTER_SANITIZE_STRING);
            $regiao = filter_input(INPUT_GET, 'regiao', FILTER_SANITIZE_STRING);
            $ano = filter_input(INPUT_GET, 'ano', FILTER_SANITIZE_STRING);
            $mes = filter_input(INPUT_GET, 'mes', FILTER_SANITIZE_STRING);
            $desoneracao = filter_input(INPUT_GET, 'desoneracao', FILTER_SANITIZE_STRING);
//            $variacao = filter_input(INPUT_GET, 'variacao', FILTER_SANITIZE_STRING);
            $projeto = filter_input(INPUT_GET, 'projeto', FILTER_SANITIZE_STRING);
            $area_edificacao = filter_input(INPUT_GET, 'area_edificacao', FILTER_SANITIZE_STRING);
            $variacao = "";
            $orcamento = new Orcamento($nome_obra, $regiao, $ano, $mes, $desoneracao, $variacao, $projeto, $area_edificacao);
            session_start();
            $_SESSION['orcamento'] = $orcamento
            ?>


            <div style="border-top:  5px #000 solid;border-bottom:  5px #000 solid;  border-radius: 25px; margin-top: 10px;">
                <div id="coeficientes_medios">
                    <form method="POST" action="coeficientes.php">
                        <center><h3 style="margin-top: 10px;">Coeficientes médios</h3></center>
                        <h5>Selecione as áreas existentes na edificação: </h5>
                        <div class="row" style="margin-top: 15px; ">
                            <div class="col-6" style="">

                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="ajardinamento" id="ajardinamento" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Ajardinamento</h5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="area_sem_acabamento" id="area_sem_acabamento" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Área de laje sem acabamento</h5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="area_benfeitoria" id="area_benfeitoria" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Área de projeção do terreno sem benfeitoria</h5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="area_servico_padrao_baixo" id="area_servico_padrao_baixo" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Área de serviço - residência unifamiliar padrão baixo (aberta)</h5>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="area_privativa_com_acabamento" id="area_privativa_com_acabamento" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Área privativa - Salas com acabamento</h5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="area_privativa_sem_acabamento" id="area_privativa_sem_acabamento" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Área privativa - Salas sem acabamento</h5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="area_verde" id="area_verde" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Área verde e outros</h5>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="barrilete" id="barrilete" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Barrilete</h5>
                                    </div>
                                </div>




                            </div>

                            <div class="col">


                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="caixa_agua" id="caixa_agua" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Caixa d'água</h5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="casa_maquinas" id="casa_maquinas" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Casa de máquinas</h5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="estacionamento_terreno" id="estacionamento_terreno" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Estacionamento sobre terreno</h5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="garagem_subsolo" id="garagem_subsolo" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Garagem (subsolo)</h5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="garagem_circulacao" id="garagem_circulacao" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Garagem ou circulação</h5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="quintal" id="quintal" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Piscinas, quintais, entre outros</h5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="terraco_laje" id="terraco_laje" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Terraços ou áreas descobertas sobre lajes</h5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input type="checkbox" name="varandas" id="varandas" value="ON" >
                                            </div>
                                        </div>
                                        <h5 class="form-control">Varandas</h5>
                                    </div>
                                </div>





                            </div>



                        </div>
                        <center><button class="btn btn-primary" type="submit">Prosseguir</button></center>
                    </form>
                </div>

            </div>
        </div>


    </body>
</html>
