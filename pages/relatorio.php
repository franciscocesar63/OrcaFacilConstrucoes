<?php

include_once '../classes/Coeficientes.php';
include_once '../classes/CalculoCoeficientesXArea.php';
include_once '../classes/Orcamento.php';
include_once '../banco/conexao.php';
include_once '../classes/CoeficienteDAO.php';

//Radios
$ajardinamento = filter_input(INPUT_POST, 'ajardinamento', FILTER_SANITIZE_STRING);
$sem_acabamento = filter_input(INPUT_POST, 'area_sem_acabamento', FILTER_SANITIZE_STRING);
$benfeitoria = filter_input(INPUT_POST, 'benfeitoria', FILTER_SANITIZE_STRING);
$servico_padrao = filter_input(INPUT_POST, 'servico_padrao', FILTER_SANITIZE_STRING);
$privativa_com_acabamento = filter_input(INPUT_POST, 'privativa_com_acabamento', FILTER_SANITIZE_STRING);
$privativa_sem_acabamento = filter_input(INPUT_POST, 'privativa_sem_acabamento', FILTER_SANITIZE_STRING);
$verde = filter_input(INPUT_POST, 'verde', FILTER_SANITIZE_STRING);
$barrilete = filter_input(INPUT_POST, 'barrilete', FILTER_SANITIZE_STRING);
$caixa_agua = filter_input(INPUT_POST, 'caixa_agua', FILTER_SANITIZE_STRING);
$casa_maquinas = filter_input(INPUT_POST, 'casa_maquinas', FILTER_SANITIZE_STRING);
$estacionamento_terreno = filter_input(INPUT_POST, 'estacionamento_terreno', FILTER_SANITIZE_STRING);
$garagem_subsolo = filter_input(INPUT_POST, 'garagem_subsolo', FILTER_SANITIZE_STRING);
$garagem_circulacao = filter_input(INPUT_POST, 'garagem_circulacao', FILTER_SANITIZE_STRING);
$quintal = filter_input(INPUT_POST, 'quintal', FILTER_SANITIZE_STRING);
$terraco_laje = filter_input(INPUT_POST, 'terraco_laje', FILTER_SANITIZE_STRING);
$varandas = filter_input(INPUT_POST, 'varandas', FILTER_SANITIZE_STRING);

$radio_coeficientes = new Coeficientes(
        $ajardinamento,
        $sem_acabamento,
        $benfeitoria,
        $servico_padrao,
        $privativa_com_acabamento,
        $privativa_sem_acabamento,
        $verde,
        $barrilete,
        $caixa_agua,
        $casa_maquinas,
        $estacionamento_terreno,
        $garagem_subsolo,
        $garagem_circulacao,
        $quintal,
        $terraco_laje,
        $varandas
);
//Áreas
$area_ajardinamento = filter_input(INPUT_POST, 'area_ajardinamento', FILTER_SANITIZE_STRING);
$area_laje = filter_input(INPUT_POST, 'area_laje', FILTER_SANITIZE_STRING);

$area_benfeitoria = filter_input(INPUT_POST, 'area_benfeitoria', FILTER_SANITIZE_STRING);
$area_servico_padrao = filter_input(INPUT_POST, 'area_servico_padrao', FILTER_SANITIZE_STRING);
$area_privativa_com_acabamento = filter_input(INPUT_POST, 'area_privativa_com_acabamento', FILTER_SANITIZE_STRING);
$area_privativa_sem_acabamento = filter_input(INPUT_POST, 'area_privativa_sem_acabamento', FILTER_SANITIZE_STRING);
$area_verde = filter_input(INPUT_POST, 'area_verde', FILTER_SANITIZE_STRING);
$area_barrilete = filter_input(INPUT_POST, 'area_barrilete', FILTER_SANITIZE_STRING);
$area_caixa_agua = filter_input(INPUT_POST, 'area_caixa_agua', FILTER_SANITIZE_STRING);
$area_casa_maquinas = filter_input(INPUT_POST, 'area_casa_maquinas', FILTER_SANITIZE_STRING);
$area_estacionamento_terreno = filter_input(INPUT_POST, 'area_estacionamento_terreno', FILTER_SANITIZE_STRING);
$area_garagem_subsolo = filter_input(INPUT_POST, 'area_garagem_subsolo', FILTER_SANITIZE_STRING);
$area_garagem_circulacao = filter_input(INPUT_POST, 'area_garagem_circulacao', FILTER_SANITIZE_STRING);
$area_quintal = filter_input(INPUT_POST, 'area_quintal', FILTER_SANITIZE_STRING);
$area_terraco_laje = filter_input(INPUT_POST, 'area_terraco_laje', FILTER_SANITIZE_STRING);
$area_varandas = filter_input(INPUT_POST, 'area_varandas', FILTER_SANITIZE_STRING);

$area_coeficientes = new Coeficientes($area_ajardinamento, $area_laje, $area_benfeitoria,
        $area_servico_padrao, $area_privativa_com_acabamento, $area_privativa_sem_acabamento, $area_verde,
        $area_barrilete, $area_caixa_agua, $area_casa_maquinas, $area_estacionamento_terreno, $area_garagem_subsolo,
        $area_garagem_circulacao, $area_quintal, $area_terraco_laje, $area_varandas);

session_start();
$orcamento_session = $_SESSION['orcamento'];
$desoneracao = -1;
if ($orcamento_session->getDesoneracao() === 'sem-desoneracao') {
    $nome_desoneracao = "Sem desoneração da mão de obra";
    $desoneracao = 0;
} else {
    $nome_desoneracao = "Com desoneração da mão de obra";
    $desoneracao = 1;
}


$array_nomes = [
    'Ajardinamento', 'Área de laje sem acabamento', 'Área de projeção do terreno sem benfeitoria', 'Área de serviço - residência unifamiliar padrão baixo (aberta)',
    'Área privativa - Salas com acabamento', 'Área privativa - Salas sem acabamento', 'Área verde e outros',
    'Barrilete', "Caixa d'água", 'Casa de máquinas', 'Estacionamento sobre terreno', 'Garagem (subsolo)',
    'Garagem ou circulação', 'Piscinas, quintais, entre outros', 'Terraços ou áreas descobertas sobre lajes', 'Varandas'
];

$mes = $orcamento_session->getMes();

$regiao = $orcamento_session->getRegiao();

$projeto = $orcamento_session->getProjeto();
$gambiarra = $projeto;
echo '$gambiarra' . $gambiarra . '<br>';
$gambiarra = substr_replace($gambiarra, '', 2, strlen($gambiarra));

$padrao = substr_replace($gambiarra, '', 0, 1);

$tipo = substr_replace($gambiarra, '', 1, strlen($gambiarra));
echo 'tipo final: ' . $tipo;

if ($padrao == 'B') {
    $padrao = 'baixo';
}
if ($padrao = 'A') {
    $padrao = 'alto';
}
if ($padrao = 'N') {
    $padrao = 'normal';
}
if ($tipo == 'G') {
    $tipo = 'GI';
    $padrao = 'normal';
}

$projeto = substr_replace($projeto, '', 0, 3);
$projeto = substr_replace($projeto, '-', 1, 1);
;
$dao = new CoeficienteDAO();
$dado_cub = $dao->selectDados($mes, $regiao, $desoneracao, $padrao, $tipo);

if ($_SESSION['residenciasTerreas'] == 'normal') {
    //calculonormal

    $array_area = $area_coeficientes->somaDosCub($radio_coeficientes, $area_coeficientes, $dado_cub['valor']);
    $valor_cub_total = $area_coeficientes->somaAreaCub($array_area);
} else {

    //GARAGEM.
    $sem_acabamento_garagem = filter_input(INPUT_POST, 'sem_acabamento_garagem', FILTER_SANITIZE_STRING);
    $casa_maquinas_garagem = filter_input(INPUT_POST, 'casa_maquinas_garagem', FILTER_SANITIZE_STRING);
    $garagem_circulacao_garagem = filter_input(INPUT_POST, 'garagem_circulacao_garagem', FILTER_SANITIZE_STRING);

    $area_laje_garagem = filter_input(INPUT_POST, 'area_laje_garagem', FILTER_SANITIZE_STRING);
    $area_casa_maquinas_garagem = filter_input(INPUT_POST, 'area_casa_maquinas_garagem', FILTER_SANITIZE_STRING);
    $area_garagem_circulacao_garagem = filter_input(INPUT_POST, 'area_garagem_circulacao_garagem', FILTER_SANITIZE_STRING);

    //TERREO.
    $sem_acabamento_terreo = filter_input(INPUT_POST, 'sem_acabamento_terreo', FILTER_SANITIZE_STRING);
//    echo '<br> $sem_acabamento_terreo : ' . $sem_acabamento_terreo . '<br>';

    $privativa_com_acabamento_terreo = filter_input(INPUT_POST, 'privativa_com_acabamento_terreo', FILTER_SANITIZE_STRING);
    $privativa_sem_acabamento_terreo = filter_input(INPUT_POST, 'privativa_sem_acabamento_terreo', FILTER_SANITIZE_STRING);
    $verde_terreo = filter_input(INPUT_POST, 'verde_terreo', FILTER_SANITIZE_STRING);
    $casa_maquinas_terreo = filter_input(INPUT_POST, 'casa_maquinas_terreo', FILTER_SANITIZE_STRING);
    $garagem_circulacao_terreo = filter_input(INPUT_POST, 'garagem_circulacao_terreo', FILTER_SANITIZE_STRING);
    $quintal_terreo = filter_input(INPUT_POST, 'quintal_terreo', FILTER_SANITIZE_STRING);
//    $area_laje_terreo = filter_input(INPUT_POST, 'area_laje_terreo', FILTER_SANITIZE_STRING);
    $area_laje_terreo = $_POST['area_laje_terreo'];
//    echo '<br> $area_laje_terreo : ' . $area_laje_terreo . '<br>';

    $area_privativa_com_acabamento_terreo = filter_input(INPUT_POST, 'area_privativa_com_acabamento_terreo', FILTER_SANITIZE_STRING);

    $area_privativa_sem_acabamento_terreo = filter_input(INPUT_POST, 'area_privativa_sem_acabamento_terreo', FILTER_SANITIZE_STRING);
    $area_verde_terreo = filter_input(INPUT_POST, 'area_verde_terreo', FILTER_SANITIZE_STRING);
    $area_casa_maquinas_terreo = filter_input(INPUT_POST, 'area_casa_maquinas_terreo', FILTER_SANITIZE_STRING);
    $area_garagem_circulacao_terreo = filter_input(INPUT_POST, 'area_garagem_circulacao_terreo', FILTER_SANITIZE_STRING);
    $area_quintal_terreo = filter_input(INPUT_POST, 'area_quintal_terreo', FILTER_SANITIZE_STRING);

    //TIPO.
    $sem_acabamento_tipo = filter_input(INPUT_POST, 'sem_acabamento_tipo', FILTER_SANITIZE_STRING);
//    echo '<br> $sem_acabamento_tipo : ' . $sem_acabamento_tipo . '<br>';

    $privativa_com_acabamento_tipo = filter_input(INPUT_POST, 'privativa_com_acabamento_tipo', FILTER_SANITIZE_STRING);
    $privativa_sem_acabamento_tipo = filter_input(INPUT_POST, 'privativa_sem_acabamento_tipo', FILTER_SANITIZE_STRING);

//    $area_laje_tipo = filter_input(INPUT_POST, 'area_laje_tipo', FILTER_SANITIZE_STRING);
    $area_laje_tipo = $_POST['area_laje_tipo'];
//    echo '<br> $area_laje_tipo : ' . $area_laje_tipo . '<br>';

    $area_privativa_com_acabamento_tipo = filter_input(INPUT_POST, 'area_privativa_com_acabamento_tipo', FILTER_SANITIZE_STRING);
    $area_privativa_sem_acabamento_tipo = filter_input(INPUT_POST, 'area_privativa_sem_acabamento_tipo', FILTER_SANITIZE_STRING);

    //TELHADO.
    $sem_acabamento_telhado = filter_input(INPUT_POST, 'sem_acabamento_telhado', FILTER_SANITIZE_STRING);
//    echo '<br> $sem_acabamento_telhado : ' . $sem_acabamento_telhado . '<br>';

    $verde_telhado = filter_input(INPUT_POST, 'verde_telhado', FILTER_SANITIZE_STRING);
    $casa_maquinas_telhado = filter_input(INPUT_POST, 'casa_maquinas_telhado', FILTER_SANITIZE_STRING);

//    $area_laje_telhado = filter_input(INPUT_POST, 'area_laje_telhado', FILTER_SANITIZE_STRING);
    $area_laje_telhado = $_POST['area_laje_telhado'];
//    echo '<br> $area_laje_telhado : ' . $area_laje_telhado . '<br>';

    $area_verde_telhado = filter_input(INPUT_POST, 'area_verde_telhado', FILTER_SANITIZE_STRING);
    $area_casa_maquinas_telhado = filter_input(INPUT_POST, 'area_casa_maquinas_telhado', FILTER_SANITIZE_STRING);

    //Coeficientes - Checkbox
    //cada valor resultante x area
    $array_geral = [
        //garagem
        $sem_acabamento_garagem,
        $casa_maquinas_garagem,
        $garagem_subsolo,
        $garagem_circulacao_garagem, //3
        //terreo
        $ajardinamento, //4
        $sem_acabamento_terreo,
        $benfeitoria,
        $privativa_com_acabamento_terreo,
        $privativa_sem_acabamento_terreo,
        $verde_terreo,
        $casa_maquinas_terreo,
        $estacionamento_terreno,
        $garagem_circulacao_terreo,
        $quintal_terreo, //13
        //tipo
        $servico_padrao, //14
        $sem_acabamento_tipo,
        $privativa_com_acabamento_tipo,
        $privativa_sem_acabamento_tipo,
        $varandas, //18
        //telhado
        $sem_acabamento_telhado, //19
        $verde_telhado,
        $barrilete,
        $casa_maquinas_telhado,
        $caixa_agua,
        $terraco_laje, //24
    ];

    $array_area_geral = [
        $area_laje_garagem,
        $area_casa_maquinas_garagem,
        $area_garagem_subsolo,
        $area_garagem_circulacao_garagem,
        $area_ajardinamento,
        $area_laje_terreo,
        $area_benfeitoria,
        $area_privativa_com_acabamento_terreo,
        $area_privativa_sem_acabamento_terreo,
        $area_verde_terreo,
        $area_casa_maquinas_terreo,
        $area_estacionamento_terreno,
        $area_garagem_circulacao_terreo,
        $area_quintal_terreo,
        $area_servico_padrao,
        $area_laje_tipo,
        $area_privativa_com_acabamento_tipo,
        $area_privativa_sem_acabamento_tipo,
        $area_varandas,
        $area_laje_telhado,
        $area_verde_telhado,
        $area_barrilete,
        $area_casa_maquinas_telhado,
        $area_caixa_agua,
        $area_terraco_laje,
    ];
    //coeficientes tipo


    $array_tipo = [
        $servico_padrao,
        $sem_acabamento_tipo,
        $privativa_com_acabamento_tipo,
        $privativa_sem_acabamento_tipo,
        $varandas,
    ];

    $array_area_tipo = [
        $area_servico_padrao,
        $area_laje_tipo,
        $area_privativa_com_acabamento_tipo,
        $area_privativa_sem_acabamento_tipo,
        $area_varandas,
    ];

    $pavimentos = $_SESSION['quantidadePavimentos'];

    $calculoCoeficientes = new CalculoCoeficientesXArea();
    //$somaGeralTeste = $calculoCoeficientes->calculaCoeficiente($array_geral, $array_area_geral, $dado_cub['valor']);

    $array_area = $area_coeficientes->somaDosCub($array_geral, $array_area_geral, $dado_cub['valor'], $pavimentos);
    $valor_cub_total = $area_coeficientes->somaAreaCub($array_area);

    echo '<br> Soma Geral Teste: <br>';
    var_dump($array_area);
    echo '<br> $valor_cub_total: <br>';
    echo $valor_cub_total;
}

//referenciar o DomPDF com namespace
use Dompdf\Dompdf;

// include autoloader
require_once("dompdf/autoload.inc.php");
//Criando a Instancia
$dompdf = new DOMPDF();
date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y');
//echo $date;

require_once '../classes/Util.php';

$util = new Util();

$mes = $dado_cub['mes'];
$util->getMes($dado_cub['mes']);

$html = '
    <div style="margin-left: 50px; margin-right: 50px; ">
    <h1 style="text-align: center;">' . $orcamento_session->getNome_Obra() . '</h1>
    <p>Segue o detalhamento do custo unitário básico (CUB) 
    da edificação <strong> “' . $orcamento_session->getNome_Obra() . '”,</strong> realizado na data ' . $date . ', 
    com área de ' . $orcamento_session->getArea_edificacao() . ' m², através do OrçaFácil.</p>
    <p style="margin-left: 75px;">CUB considerado: </p>
    <p><strong>' . $projeto . ' R$ ' . number_format($dado_cub['valor'], 2, ',', '.') . '</strong> </p>
    <p>Padrão: <b>' . ucfirst($padrao) . '</b></p>
    <p>SINDUSCON ' . $dado_cub['estado'] . ', referente ao mês de ' . ucfirst($mes) . ' de ' . $orcamento_session->getAno() . ', ' . $nome_desoneracao . '</p>
        <p style="text-decoration: underline; margin-left: 25px;"><strong>Especificação dos custos: </strong></p>
         ';

$area = $array_area[0];
$edificacao = $orcamento_session->getArea_edificacao();
$edificacao_calculo = $edificacao * 1 * $dado_cub['valor'];
$edificacao_format = number_format($edificacao_calculo, 2, ',', '.');
$html .= "<p>-Edificação $edificacao m² - <strong>R$ $edificacao_format</strong></p>";
echo '<br> $array_area <br>';
var_dump($array_area[0]);
echo '<br> $array_area <br>';
if ($_SESSION['residenciasTerreas'] == 'normal') {

    for ($i = 0; $i <= count($array_nomes) - 1; $i++) {
        if (isset($array_area[0][$i])) {
//        var_dump($array_area[0][$i]);

            $metros = $array_area[1][$i];

            $valor = number_format($array_area[0][$i], 2, ',', '.');
            $html .= "<p>-$array_nomes[$i] $metros m² - <strong> R$ $valor</strong></p>";
        } else {
            
        }
    }
} else {

    $array_nomes_repetidos = [
        'Área de laje sem acabamento', 'Casa de máquinas', 'Garagem (subsolo)', 'Garagem ou circulação',
        'Ajardinamento', 'Área de laje sem acabamento', 'Área de projeção do terreno sem benfeitoria', 'Área privativa - Salas com acabamento',
        'Área privativa - Salas sem acabamento', 'Área verde e outros', 'Casa de máquinas', 'Estacionamento sobre terreno', 'Garagem ou circulação', 'Piscinas, quintais, entre outros',
        'Área de serviço - residência unifamiliar padrão baixo (aberta)', 'Área de laje sem acabamento', 'Área privativa - Salas com acabamento',
        'Área privativa - Salas sem acabamento', 'Varandas',
        'Área de laje sem acabamento', 'Área verde e outros', 'Barrilete', 'Casa de máquinas', "Caixa d'água", 'Terraços ou áreas descobertas sobre lajes'];
    $garagem_bool = false;
    $terreo_bool = false;
    $pavimentos_bool = false;
    $cobertura_bool = false;
    for ($i = 0; $i <= count($array_nomes_repetidos) - 1; $i++) {

        if (isset($array_area[0][$i])) {
            //pareiaqui

            if ($i <= 3 && !$garagem_bool) {
                $html .= '<h4>Garagem:</h4>';
                $garagem_bool = true;
            } else if ($i > 3 && $i <= 13 && !$terreo_bool) {
                $html .= '<h4>Térreo ou Pilotis:</h4>';
                $terreo_bool = true;
            } else if ($i > 13 && $i <= 18 && !$pavimentos_bool) {

                if ($pavimentos > 1) {
                    $html .= '<h4>Pavimentos Tipo (' . $pavimentos . ' pavimentos):</h4>';
                } else {
                    $html .= '<h4>Pavimentos Tipo (' . $pavimentos . ' pavimento):</h4>';
                }



                $pavimentos_bool = true;
            } else if ($i > 18 && $i <= 24 && !$cobertura_bool) {
                $html .= '<h4>Cobertura:</h4>';
                $cobertura_bool = true;
            }



            $metros = $array_area[1][$i];

            $valor = number_format($array_area[0][$i], 2, ',', '.');
            $html .= "<p>-$array_nomes_repetidos[$i] $metros m² - <strong> R$ $valor</strong></p>";
        } else {
            
        }
    }
}



$valor_cub_total += $edificacao_calculo;
$total = number_format($valor_cub_total, 2, ',', '.');
// var_dump($total);
$html .= " <center><h2 style='text-decoration: underline;'>Valor global da edificação</h2></center> "
        . " <center><h1>R$ $total</h1></center> ";
$custo = number_format($valor_cub_total / $orcamento_session->getArea_edificacao(), 2, ',', '.');
$html .= "<h3>Custo por m² da área de construção (R$/m²) – R$ $custo</h3>";
$html .= "<div>";

$mes = $dado_cub['mes'];
$ano = $dado_cub['ano'];
$dados = array();
$dados[$mes] = array($mes, $ano);
$mes_atual = $mes;
$ano_atual = $ano;

for ($i = 0; $i < 11; $i++) {
    if ($mes_atual - 1 <= 12 && $mes_atual - 1 > 0) {

        $mes_atual = $mes_atual - 1;
        $dados[$mes_atual] = array($mes_atual, $ano_atual);
    } else if ($mes_atual - 1 <= 0) {
        $mes_atual = 12;
        $ano_atual -= 1;
        $dados[$mes_atual] = array($mes_atual, $ano_atual);
    }
}

$data = array();
$i = 0;
foreach ($dados as $dado) {

    $dados_cub = $dao->selectDadosAno($dado[0], $dado[1], $regiao, $desoneracao, $padrao, $tipo);
    $array_area = $area_coeficientes->somaDosCub($radio_coeficientes, $area_coeficientes, $dado_cub['valor']);
    $soma = $area_coeficientes->somaAreaCub($array_area);

    $data[$i] = array($util->getMesSimplificado($dado[0]) . '/' . $dado[1], $soma);

    $i++;
}

var_dump($data[0]);

require_once '../classes/phplot-6.2.0/phplot.php';

$plot = new PHPlot(700, 300);
$plot->SetImageBorderType('plain');

$plot->SetPlotType('bars');
$plot->SetDataType('text-data');
$plot->SetDataValues($data);

# Main plot title:
$plot->SetTitle('Cub');

# Make a legend for the 3 data sets plotted:
$plot->SetLegend(array('Mes'));

# Turn off X tick labels and ticks because they don't apply here:
$plot->SetXTickLabelPos('none');
$plot->SetXTickPos('none');
$plot->SetPrintImage(false);
$plot->DrawGraph();

$html .= '<img src="' . $plot->EncodeImage() . '" alt="Plot Image">';

$dompdf->load_html($html);

//Renderizar o html,
ob_clean();
$dompdf->render();
////Exibibir a página
$dompdf->stream(
        "relatorio_cub",
        array(
            "Attachment" => true //Para realizar o download somente alterar para true
        )
);
