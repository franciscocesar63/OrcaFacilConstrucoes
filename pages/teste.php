<?php
include_once '../banco/conexao.php';
?>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Banco de Dados</title>

        <link rel="stylesheet" href="../libs/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../libs/css/styles.css" type="text/css">
        <script type="text/javascript" src="../libs/js/bootstrap.js"></script>
        <script type="text/javascript" src="../libs/js/jquery.js"></script>
        <script type="text/javascript" src="../libs/js/javascript.js"></script>

    </head>
    <?php
    include_once './navbar.php';
    ?>
    <body class="container">
        <div class="form-group" style="margin-top: 75px;">
            <center><h2>Cadastro</h2></center>
            <form method="GET" action="../banco/cadastra_dados_banco.php">
                <div class="row">
                    <div class="col-6">
                        <input class="form-control" type="text" name="1" id="1" placeholder="PB R1">
                        <input class="form-control" type="text" name="2" placeholder="PB PP4">
                        <input class="form-control" type="text" name="3" placeholder="PB R8">
                        <input class="form-control" type="text" name="4" placeholder="PB PIS">
                        <input class="form-control" type="text" name="5" placeholder="PN R1">
                        <input class="form-control" type="text" name="6" placeholder="PN PP4">
                        <input class="form-control" type="text" name="7" placeholder="PN R8">
                        <input class="form-control" type="text" name="8" placeholder="PN R16">
                        <input class="form-control"type="text" name="9" placeholder="PA R1">
                        <input class="form-control"type="text" name="10" placeholder="PA R8">
                        <input class="form-control"type="text" name="11" placeholder="PA R16">
                        <input class="form-control"type="text" name="12" placeholder="PN CAL 8">
                        <input class="form-control"type="text" name="13"placeholder="PN CSL8">
                        <input class="form-control"type="text" name="14"placeholder="PN CSL16">
                        <input class="form-control"type="text" name="15"placeholder="PA CAL 8" >
                        <input class="form-control"type="text" name="16" placeholder="PA CSL 8">
                        <input class="form-control"type="text" name="17"placeholder="PA CSL 16">
                        <input class="form-control"type="text" name="18"placeholder="RP1Q">
                        <input class="form-control"type="text" name="19"placeholder="GI">
                    </div>

                    <div class="col-6">
                        <div class="form-group">

                            <label for="regiao">Região: </label>

                            <select id="regiao" name="regiao" class="form-control" required="">
                                <option value="" selected="selected">Selecione</option>
                                <option value="AC"  >AC - Acre</option>
                                <option value="AM"  >AM - Amazonas</option>
                                <option value="BA"  >BA - Bahia</option>
                                <option value="CE"  >CE - Ceará</option>
                                <option value="DF"  >DF - Distrito Federal</option>
                                <option value="ES"  >ES - Espírito Santo</option>
                                <option value="GO"  >GO - Goiás</option>
                                <option value="MA"  >MA - Maranhão</option>
                                <option value="MT"  >MT - Mato Grosso</option>
                                <option value="MG"  >MG - Minas Gerais</option>
                                <option value="PR"  >PR - Paraná</option>
                                <option value="PB"  >PB - Paraíba</option>
                                <option value="PA"  >PA - Pará</option>
                                <option value="PE"  >PE - Pernambuco</option>
                                <option value="PI"  >PI - Piauí</option>
                                <option value="RN"  >RN - Rio Grande do Norte</option>
                                <option value="RJ"  >RJ - Rio de Janeiro</option>
                                <option value="RO"  >RO - Rondônia</option>
                                <option value="RR"  >RR - Roraima</option>
                                <option value="SC"  >SC - Santa Catarina</option>
                                <option value="SE"  >SE - Sergipe</option>
                            </select>
                        </div>
                        <!-- Fazer pesquisa de banco no mês e no ano   -->
                        <label for="ano">Ano</label>
                        <div class="form-group">
                            <select class="form-control" name="ano" id="ano">
                                <option>2018</option>
                            </select>
                        </div>

                        <label for="mes">Mês: </label>
                        <div class="form-group">
                            <select class="form-control" name="mes" id="mes">
                                <option value="janeiro"  >Janeiro</option>
                                <option value="fevereiro"  >Fevereiro</option>
                                <option value="marco"  >Março</option>
                                <option value="abril"  >Abril</option>
                                <option value="maio"  >Maio</option>
                                <option value="junho"  >Junho</option>
                                <option value="julho"  >Julho</option>
                                <option value="agosto"  >Agosto</option>
                                <option value="setembro"  >Setembro</option>
                                <option value="outubro"  >Outubro</option>
                                <option value="novembro" >Novembro</option>
                                <option value="dezembro"  >Dezembro</option>
                            </select>
                        </div>




                        <!--Coluna 2-->
                        <label for="desoneracao">Desoneração: </label>
                        <div class="form-group">
                            <select  class="form-control" id="desoneracao" name="desoneracao" >
                                <option value="sem-desoneracao">Sem desoneração da mão de obra</option>
                                <option value="com-desoneracao">Com desoneração da mão de obra</option>
                            </select>
                        </div>
                    </div>






                </div>

                <input class="btn btn-primary" type="submit" value="Confirmar" style="float:right;">
            </form>
        </div>

    </body>
</html>