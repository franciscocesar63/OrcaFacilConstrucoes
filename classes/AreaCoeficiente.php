<?php

class AreaCoeficiente {

    private $ajardinamento;
    private $area_sem_acabamento;
    private $area_benfeitoria;
    private $area_servico_padrao;
    private $area_privativa_autonoma;
    private $area_privativa_com_acabamento;
    private $area_privativa_sem_acabamento;
    private $area_verde;
    private $barrilete;
    private $caixa_agua;
    private $casa_maquinas;
    private $estacionamento_terreno;
    private $garagem_subsolo;
    private $garagem_circulacao;
    private $quintal;
    private $terraco_laje;
    private $varandas;

    function __construct($ajardinamento, $area_sem_acabamento, $area_benfeitoria, $area_servico_padrao, $area_privativa_autonoma, $area_privativa_com_acabamento, $area_privativa_sem_acabamento, $area_verde, $barrilete, $caixa_agua, $casa_maquinas, $estacionamento_terreno, $garagem_subsolo, $garagem_circulacao, $quintal, $terraco_laje, $varandas) {
        $this->ajardinamento = $ajardinamento;
        $this->area_sem_acabamento = $area_sem_acabamento;
        $this->area_benfeitoria = $area_benfeitoria;
        $this->area_servico_padrao = $area_servico_padrao;
        $this->area_privativa_autonoma = $area_privativa_autonoma;
        $this->area_privativa_com_acabamento = $area_privativa_com_acabamento;
        $this->area_privativa_sem_acabamento = $area_privativa_sem_acabamento;
        $this->area_verde = $area_verde;
        $this->barrilete = $barrilete;
        $this->caixa_agua = $caixa_agua;
        $this->casa_maquinas = $casa_maquinas;
        $this->estacionamento_terreno = $estacionamento_terreno;
        $this->garagem_subsolo = $garagem_subsolo;
        $this->garagem_circulacao = $garagem_circulacao;
        $this->quintal = $quintal;
        $this->terraco_laje = $terraco_laje;
        $this->varandas = $varandas;
    }

    function getAjardinamento() {
        return $this->ajardinamento;
    }

    function getArea_sem_acabamento() {
        return $this->area_sem_acabamento;
    }

    function getArea_benfeitoria() {
        return $this->area_benfeitoria;
    }

    function getArea_servico_padrao() {
        return $this->area_servico_padrao;
    }

    function getArea_privativa_autonoma() {
        return $this->area_privativa_autonoma;
    }

    function getArea_privativa_com_acabamento() {
        return $this->area_privativa_com_acabamento;
    }

    function getArea_privativa_sem_acabamento() {
        return $this->area_privativa_sem_acabamento;
    }

    function getArea_verde() {
        return $this->area_verde;
    }

    function getBarrilete() {
        return $this->barrilete;
    }

    function getCaixa_agua() {
        return $this->caixa_agua;
    }

    function getCasa_maquinas() {
        return $this->casa_maquinas;
    }

    function getEstacionamento_terreno() {
        return $this->estacionamento_terreno;
    }

    function getGaragem_subsolo() {
        return $this->garagem_subsolo;
    }

    function getGaragem_circulacao() {
        return $this->garagem_circulacao;
    }

    function getQuintal() {
        return $this->quintal;
    }

    function getTerraco_laje() {
        return $this->terraco_laje;
    }

    function getVarandas() {
        return $this->varandas;
    }

    function setAjardinamento($ajardinamento) {
        $this->ajardinamento = $ajardinamento;
    }

    function setArea_sem_acabamento($area_sem_acabamento) {
        $this->area_sem_acabamento = $area_sem_acabamento;
    }

    function setArea_benfeitoria($area_benfeitoria) {
        $this->area_benfeitoria = $area_benfeitoria;
    }

    function setArea_servico_padrao($area_servico_padrao) {
        $this->area_servico_padrao = $area_servico_padrao;
    }

    function setArea_privativa_autonoma($area_privativa_autonoma) {
        $this->area_privativa_autonoma = $area_privativa_autonoma;
    }

    function setArea_privativa_com_acabamento($area_privativa_com_acabamento) {
        $this->area_privativa_com_acabamento = $area_privativa_com_acabamento;
    }

    function setArea_privativa_sem_acabamento($area_privativa_sem_acabamento) {
        $this->area_privativa_sem_acabamento = $area_privativa_sem_acabamento;
    }

    function setArea_verde($area_verde) {
        $this->area_verde = $area_verde;
    }

    function setBarrilete($barrilete) {
        $this->barrilete = $barrilete;
    }

    function setCaixa_agua($caixa_agua) {
        $this->caixa_agua = $caixa_agua;
    }

    function setCasa_maquinas($casa_maquinas) {
        $this->casa_maquinas = $casa_maquinas;
    }

    function setEstacionamento_terreno($estacionamento_terreno) {
        $this->estacionamento_terreno = $estacionamento_terreno;
    }

    function setGaragem_subsolo($garagem_subsolo) {
        $this->garagem_subsolo = $garagem_subsolo;
    }

    function setGaragem_circulacao($garagem_circulacao) {
        $this->garagem_circulacao = $garagem_circulacao;
    }

    function setQuintal($quintal) {
        $this->quintal = $quintal;
    }

    function setTerraco_laje($terraco_laje) {
        $this->terraco_laje = $terraco_laje;
    }

    function setVarandas($varandas) {
        $this->varandas = $varandas;
    }

}
