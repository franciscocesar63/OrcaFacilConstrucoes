<html>

<head>
    <meta charset="UTF-8">
    <title>Orçamento</title>

    <link rel="stylesheet" href="../libs/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../libs/css/styles.css" type="text/css">
    <script type="text/javascript" src="../libs/js/bootstrap.js"></script>
    <script type="text/javascript" src="../libs/js/jquery.js"></script>

</head>

<body>
    <?php
    include_once '../pages/navbar.php';

    ?>
    <div class="container" style="margin-top: 75px;">
        <div class="form-control">
            <button class="btn btn-primary seta-direita" style="width: 33%; border-radius: ">Dados Iniciais</button>
            <button class="btn btn-secondary" style="width: 33%;" disabled="">Coeficientes Médios</button>
            <button class="btn btn-secondary" style="width: 33%;" disabled="">Áreas e Coeficientes Médios</button>
        </div>
        <div>
            <form method="GET" action="coeficientes_medios.php">
                <div class="row">
                    <div class="col-6" style="margin-top:20px;">
                        <div class="form-group">
                            <label for="nome_obra">Nome da Obra: </label>
                            <input class="form-control" type="text" name="nome_obra" id="nome_obra" placeholder="Nome da Obra" required="">
                        </div>
                        <div class="form-group">

                            <label for="regiao">Região: </label>

                            <select id="regiao" name="regiao" class="form-control" required="">
                                <option value="" selected="selected">Selecione</option>
                                <option value="AC">AC - Acre</option>
                                <option value="AM">AM - Amazonas</option>
                                <option value="BA">BA - Bahia</option>
                                <option value="CE">CE - Ceará</option>
                                <option value="DF">DF - Distrito Federal</option>
                                <option value="ES">ES - Espírito Santo</option>
                                <option value="GO">GO - Goiás</option>
                                <option value="MA">MA - Maranhão</option>
                                <option value="MT">MT - Mato Grosso</option>
                                <option value="MG">MG - Minas Gerais</option>
                                <option value="PR">PR - Paraná</option>
                                <option value="PB">PB - Paraíba</option>
                                <option value="PA">PA - Pará</option>
                                <option value="PE">PE - Pernambuco</option>
                                <option value="PI">PI - Piauí</option>
                                <option value="RN">RN - Rio Grande do Norte</option>
                                <option value="RJ">RJ - Rio de Janeiro</option>
                                <option value="RO">RO - Rondônia</option>
                                <option value="RR">RR - Roraima</option>
                                <option value="SC">SC - Santa Catarina</option>
                                <option value="SE">SE - Sergipe</option>
                            </select>
                        </div>
                        <!-- Fazer pesquisa de banco no mês e no ano   -->
                        <label for="ano">Ano</label>
                        <div class="form-group">
                            <select class="form-control" name="ano" id="ano">
                            <option>2020</option>
                            <option selected>2021</option>
                            </select>
                        </div>

                        <label for="mes">Mês: </label>
                        <div class="form-group">
                            <select class="form-control" name="mes" id="mes">
                                <option value="1">Janeiro</option>
                                <option value="2">Fevereiro</option>
                                <option value="3">Março</option>
                                <option value="4">Abril</option>
                                <option value="5">Maio</option>
                                <option value="6">Junho</option>
                                <option value="7">Julho</option>
                                <option value="8">Agosto</option>
                                <option value="9">Setembro</option>
                                <option value="10">Outubro</option>
                                <option value="11">Novembro</option>
                                <option value="12">Dezembro</option>
                            </select>
                        </div>




                    </div>
                    <div class="col-6" style="margin-top:20px;">
                        <!--Coluna 2-->
                        <label for="desoneracao">Desoneração: </label>
                        <div class="form-group">
                            <select class="form-control" id="desoneracao" name="desoneracao">
                                <option value="sem-desoneracao">Sem desoneração da mão de obra</option>
                                <option value="com-desoneracao">Com desoneração da mão de obra</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="projeto">Projeto: </label>
                            <select class="form-control" name="projeto" id="projeto">
                                <option value="RB_R_1" selected="selected">Residencial Baixo [R1]</option>
                                <option value="RB_PP_4">Residencial Baixo [PP-4]</option>
                                <option value="RB_R_8">Residencial Baixo [R8]</option>
                                <option value="RB_PIS">Residencial Baixo [PIS]</option>
                                <option value="RN_R_1">Residencial Normal [R1]</option>
                                <option value="RN_PP_4">Residencial Normal [PP-4]</option>
                                <option value="RN_R_8">Residencial Normal [R8]</option>
                                <option value="RN_R_16">Residencial Normal [R16]</option>
                                <option value="RA_R_1">Residencial Alto [R1]</option>
                                <option value="RA_R_8">Residencial Alto [R8]</option>
                                <option value="RA_R_16">Residencial Alto [R16]</option>
                                <option value="CN_CAL_8">Comercial Normal [CAL-8]</option>
                                <option value="CN_CSL_8">Comercial Normal [CSL-8]</option>
                                <option value="CN_CSL_16">Comercial Normal [CSL-16]</option>
                                <option value="CA_CAL_8">Comercial Alto [CAL-8]</option>
                                <option value="CA_CSL_8">Comercial Alto [CSL-8]</option>
                                <option value="CA_CSL_16">Comercial Alto [CSL-16]</option>
                                <option value="GI_RP1Q">Residência Popular [RP1Q]</option>
                                <option value="GI_GI">Galpão Industrial [GI]</option>
                            </select>
                        </div>

                        

                        <div class="form-group">
                            <label for="area_edificacao">Área da edificação</label>
                            <input type="number" class="form-control" step="0.0000001" placeholder="Digite a área" name="area_edificacao" id="area_edificacao">
                        </div>

                    </div>
                </div>
                <center><button id="orcamento_form" class="btn btn-primary" type="submit">Prosseguir</button></center>

            </form>
        </div>
    </div>


</body>

</html>