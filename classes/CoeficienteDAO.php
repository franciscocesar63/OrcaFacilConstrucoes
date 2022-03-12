<?php

require_once '../banco/conexao.php';

class CoeficienteDAO {

    public function selectDados($mes, $regiao, $desoneracao, $padrao, $tipo) {
        $conexao = new Conexao();
        $pdo = $conexao->conectar();
        $query = $pdo->prepare("SELECT * FROM cub where mes regexp '" . $mes . "' AND"
                . " estado regexp '" . $regiao . "' and desoneracao = " . $desoneracao . " and padrao regexp '" . $padrao . "'
     and tipo regexp '" . $tipo . "'");

        $query->execute();
        $dado_cub = $query->fetch(PDO::FETCH_ASSOC);
        return $dado_cub;
    }

    public function selectDadosAno($mes, $ano, $regiao, $desoneracao, $padrao, $tipo) {
        $conexao = new Conexao();
        $pdo = $conexao->conectar();
        $query = $pdo->prepare("SELECT * FROM cub where mes regexp '" . $mes . "' AND"
                . " estado regexp '" . $regiao . "' and desoneracao = " . $desoneracao . " and padrao regexp '" . $padrao . "'
     and tipo regexp '" . $tipo . "' and ano regexp '" . $ano . "'");

        $query->execute();
        $dado_cub = $query->fetch(PDO::FETCH_ASSOC);
        return $dado_cub;
    }

}
