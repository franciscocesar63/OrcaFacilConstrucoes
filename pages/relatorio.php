<?php

include_once '../classes/Coeficientes.php';
include_once '../classes/Orcamento.php';
include_once '../banco/conexao.php';

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
$radio_coeficientes = new Coeficientes($ajardinamento, $sem_acabamento, $benfeitoria, $servico_padrao, $privativa_com_acabamento, $privativa_sem_acabamento, $verde, $barrilete, $caixa_agua, $casa_maquinas, $estacionamento_terreno, $garagem_subsolo, $garagem_circulacao, $quintal, $terraco_laje, $varandas);
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
$area_coeficientes = new Coeficientes($area_ajardinamento, $area_laje, $area_benfeitoria, $area_servico_padrao, $area_privativa_com_acabamento, $area_privativa_sem_acabamento, $area_verde, $area_barrilete, $area_caixa_agua, $area_casa_maquinas, $area_estacionamento_terreno, $area_garagem_subsolo, $area_garagem_circulacao, $area_quintal, $area_terraco_laje, $area_varandas);
//var_dump($area_coeficientes);
session_start();
$orcamento_session = $_SESSION['orcamento'];
if ($orcamento_session->getDesoneracao() === 'sem-desoneracao') {
    $nome_desoneracao = "Sem desoneração da mão de obra";
} else {
    $nome_desoneracao = "Com desoneração da mão de obra";
}
switch ($mes = $orcamento_session->getMes()) {
    case "1": $mes = "janeiro";
        break;
    case "2": $mes = "fevereiro";
        break;
    case "3": $mes = "marco";
        break;
    case "4": $mes = "abril";
        break;
    case "5": $mes = "maio";
        break;
    case "6": $mes = "junho";
        break;
    case "7": $mes = "julho";
        break;
    case "8": $mes = "agosto";
        break;
    case "9": $mes = "setembro";
        break;
    case "10": $mes = "outubro";
        break;
    case "11": $mes = "novembro";
        break;
    case "12": $mes = "dezembro";
        break;
}
$array_nomes = ['Ajardinamento', 'Área de laje sem acabamento', 'Área de projeção do terreno sem benfeitoria', 'Área de serviço - residência unifamiliar padrão baixo (aberta)',
    'Área privativa - Salas com acabamento', 'Área privativa - Salas sem acabamento', 'Área verde e outros',
    'Barrilete', "Caixa d'água", 'Casa de máquinas', 'Estacionamento sobre terreno', 'Garagem (subsolo)',
    'Garagem ou circulação', 'Piscinas, quintais, entre outros', 'Terraços ou áreas descobertas sobre lajes', 'Varandas'];
//var_dump($orcamento_session);
//var_dump($area_coeficientes->somaDosCub($radio_coeficientes, $area_coeficientes, 2));
$a = "a" . "." . $mes;
//var_dump($a);
$regiao = $orcamento_session->getRegiao();
$projeto = $orcamento_session->getProjeto();
$query = $pdo->prepare("SELECT c.$projeto FROM ano a INNER JOIN estado e INNER JOIN cubs c ON $a=e.id_estados AND"
        . " c.id_cubs=$regiao");
$query->execute();
$dado_cub = $query->fetch(PDO::FETCH_ASSOC);
$array_area = $area_coeficientes->somaDosCub($radio_coeficientes, $area_coeficientes, $dado_cub[$projeto]);
$valor_cub_total = $area_coeficientes->somaAreaCub($array_area);

//var_dump($valor_cub_total);
//referenciar o DomPDF com namespace
use Dompdf\Dompdf;

// include autoloader
require_once("dompdf/autoload.inc.php");
//Criando a Instancia
$dompdf = new DOMPDF();
date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y');
//echo $date;
// Carrega seu HTML
$html = '
    <div style="margin-left: 50px; margin-right: 50px; ">
    <h1 style="text-align: center;">' . $orcamento_session->getNome_Obra() . '</h1>
    <p>Segue o detalhamento do custo unitário básico (CUB) 
    da edificação <strong> “' . $orcamento_session->getNome_Obra() . '”,</strong> realizado na data ' . $date . ', 
    com área de ' . $orcamento_session->getArea_edificacao() . ' m², através do OrçaFácil.</p>
    <p style="margin-left: 75px;">CUB considerado: </p>
    <p><strong>' . $projeto . ' R$ ' . number_format($dado_cub[$projeto], 2, ',', '.') . '</strong> </p>
    <p>SINDUSCON PB, ' . ucfirst($mes) . ' de ' . $orcamento_session->getAno() . ', ' . $nome_desoneracao . '</p>
        <p style="text-decoration: underline; margin-left: 25px;"><strong>Especificação dos custos: </strong></p>
         ';
$area = $array_area[0];
//var_dump($area);
//echo 'array area';
//var_dump($array_area);
$edificacao = $orcamento_session->getArea_edificacao();
$edificacao_calculo = $edificacao * 1 * $dado_cub[$projeto];
$edificacao_format = number_format($edificacao_calculo, 2, ',', '.');
$html .= "<p>-Edificação $edificacao m² - <strong>R$ $edificacao_format</strong></p>";
for ($i = 0; $i <= count($array_nomes) - 1; $i++) {
//    var_dump($i);
    if (isset($array_area[0][$i])) {
//        echo 'entrou aq';
        $metros = $array_area[1][$i];

        $valor = number_format($array_area[0][$i], 2, ',', '.');
        $html .= "<p>-$array_nomes[$i] $metros m² - <strong> R$ $valor</strong></p>";
    } else {
//        echo 'else';
    }
}
$valor_cub_total += $edificacao_calculo;
$total = number_format($valor_cub_total, 2, ',', '.');
var_dump($total);
$html .= " <center><h2 style='text-decoration: underline;'>Valor global da edificação</h2></center> "
        . " <center><h1>R$ $total</h1></center> ";
$custo = number_format($valor_cub_total / $orcamento_session->getArea_edificacao(), 2, ',', '.');
$html .= "<h3>Custo por m² da área de construção (R$/m²) – R$ $custo</h3>";
$html .= "<div>";
$dompdf->load_html($html);
//
////Renderizar o html,
ob_clean();
$dompdf->render();
////Exibibir a página
$dompdf->stream(
        "relatorio_cub", array(
    "Attachment" => true //Para realizar o download somente alterar para true
        )
);
