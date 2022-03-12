<?php

include_once './conexao.php';
$pb_r1 = $_GET['1'];
$pb_pp4 = $_GET['2'];
$pb_r8 = $_GET['3'];
$pb_pis = $_GET['4'];
$pn_r1 = $_GET['5'];
$pn_pp4 = $_GET['6'];
$pn_r8 = $_GET['7'];
$pn_r16 = $_GET['8'];
$pa_r1 = $_GET['9'];
$pa_r8 = $_GET['10'];
$pa_r16 = $_GET['11'];
$pn_cal8 = $_GET['12'];
$pn_csl8 = $_GET['13'];
$pn_csl16 = $_GET['14'];
$pa_cal8 = $_GET['15'];
$pa_csl8 = $_GET['16'];
$pa_csl16 = $_GET['17'];
$rp1q = $_GET['18'];
$gi = $_GET['19'];

$desoneracao = filter_input(INPUT_GET, 'desoneracao', FILTER_SANITIZE_STRING);
$regiao = filter_input(INPUT_GET, 'regiao', FILTER_SANITIZE_STRING);
$ano = filter_input(INPUT_GET, 'ano', FILTER_SANITIZE_STRING);
$mes = filter_input(INPUT_GET, 'mes', FILTER_SANITIZE_STRING);
var_dump($pb_r1);


if ($desoneracao === "sem-desoneracao") {


    $qry_sem = $pdo->prepare("INSERT INTO `cubs`(`PB_R_1`, `PB_PP_4`, `PB_R_8`, `PB_PIS`,"
            . " `PN_R_1`, `PN_PP_4`, `PN_R_8`, `PN_R_16`, `PA_R_1`, `PA_R_8`, `PA_R_16`, `PN_CAL_8`,"
            . " `PN_CSL_8`, `PN_CSL_16`, `PA_CAL_8`, `PA_CSL_8`, `PA_CSL_16`, `RP1Q`, `GI`) VALUES"
            . "('$pb_r1','$pb_pp4','$pb_r8','$pb_pis','$pn_r1','$pn_pp4','$pn_r8','$pn_r16','$pa_r1'"
            . ",'$pa_r8','$pa_r16','$pn_cal8','$pn_csl8','$pn_csl16','$pa_cal8','$pa_csl8','$pa_csl16','$rp1q','$gi')");

    $qry_sem->execute();
    $id = $pdo->lastInsertId();

    $qry_estado = $pdo->prepare("UPDATE estado SET $regiao=$id");
    $qry_estado->execute();

    $qry_estado1 = $pdo->prepare("SELECT id_estados FROM estado WHERE $regiao=$id");
    $qry_estado1->execute();
    $dado = $qry_estado1->fetch(PDO::FETCH_ASSOC);
    $id2 = $dado['id_estados'];
    $qry_ano = $pdo->prepare("UPDATE ano SET $mes=$id2");
    $qry_ano->execute();
} else {
    
}