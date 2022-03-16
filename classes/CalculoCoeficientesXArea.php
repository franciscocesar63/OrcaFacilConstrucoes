<?php

class CalculoCoeficientesXArea {

    public function transformaArray($garagem, $telhado, $terreo, $tipo) {
        $resultado = array();
        $i = 0;

        foreach ($garagem as $valor) {
            $resultado[$i] = $valor;
            $i++;
        }
        foreach ($telhado as $valor) {
            $resultado[$i] = $valor;
            $i++;
        }
        foreach ($terreo as $valor) {
            $resultado[$i] = $valor;
            $i++;
        }
        foreach ($tipo as $valor) {
            $resultado[$i] = $valor;
            $i++;
        }
        return $resultado;
    }

    //coeficiente e area são arrays
    public function calculaCoeficiente($coeficiente, $area, $cub) {
        $i = 0;
        $somageral = 0;
        foreach ($coeficiente as $valor) {
            if ($valor != null || $area[$i] != null || !empty($valor) || !empty($area[$i])) {
//                echo 'valor: ' . $valor;
//                echo '<br> area: ' . $area[$i] . '<br>';
//                echo '<br> cub: ' . $cub . ' <br>';

                $somageral += $valor * $area[$i] * $cub;

//                echo 'Soma geral: ' . $somageral . '<br>';
                $i++;
            }
        }

        return $somageral;
    }

    public function valorTotal($array) {
        $total = 0;

        foreach ($array[0] as $indice => $valor) {
            if ($array[0][$indice] != null) {
                $total += $valor;
            }
        }
        return $total;
    }

    public function valorArea($garagem, $terreo, $tipo, $telhado) {
        $valorArea = array();
        $i = 0;
        foreach ($garagem as $valor) {
            if ($valor != null) {
                $valorArea[$i] = $valor;
                $i++;
            }
        }
        foreach ($terreo as $valor) {
            if ($valor != null) {
                $valorArea[$i] = $valor;
                $i++;
            }
        }
        foreach ($tipo as $valor) {
            if ($valor != null) {
                $valorArea[$i] = $valor;
                $i++;
            }
        }
        foreach ($telhado as $valor) {
            if ($valor != null) {
                $valorArea[$i] = $valor;
                $i++;
            }
        }
        return $valorArea;
    }

}
