<?php

class Orcamento {

    private $nome_obra;
    private $regiao;
    private $ano;
    private $mes;
    private $desoneracao;
    private $variacao;
    private $projeto;
    private $area_edificacao;

    function __construct($nome_obra, $regiao, $ano, $mes, $desoneracao, $variacao, $projeto, $area_edificacao) {
        $this->nome_obra = $nome_obra;
        $this->regiao = $regiao;
        $this->ano = $ano;
        $this->mes = $mes;
        $this->desoneracao = $desoneracao;
        $this->variacao = $variacao;
        $this->projeto = $projeto;
        $this->area_edificacao = $area_edificacao;
    }
    function getArea_edificacao() {
        return $this->area_edificacao;
    }

    function setArea_edificacao($area_edificacao) {
        $this->area_edificacao = $area_edificacao;
    }

    
        function getNome_obra() {
        return $this->nome_obra;
    }

    function getRegiao() {
        return $this->regiao;
    }

    function getAno() {
        return $this->ano;
    }

    function getMes() {
        return $this->mes;
    }

    function getDesoneracao() {
        return $this->desoneracao;
    }

    function getVariacao() {
        return $this->variacao;
    }

    function getProjeto() {
        return $this->projeto;
    }

    function setNome_obra($nome_obra) {
        $this->nome_obra = $nome_obra;
    }

    function setRegiao($regiao) {
        $this->regiao = $regiao;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setMes($mes) {
        $this->mes = $mes;
    }

    function setDesoneracao($desoneracao) {
        $this->desoneracao = $desoneracao;
    }

    function setVariacao($variacao) {
        $this->variacao = $variacao;
    }

    function setProjeto($projeto) {
        $this->projeto = $projeto;
    }

}
