<?php
class Util{


    public function getMes($mes){

        switch ($mes) {
            case "1":
                $mes = "janeiro";
                break;
            case "2":
                $mes = "fevereiro";
                break;
            case "3":
                $mes = "marco";
                break;
            case "4":
                $mes = "abril";
                break;
            case "5":
                $mes = "maio";
                break;
            case "6":
                $mes = "junho";
                break;
            case "7":
                $mes = "julho";
                break;
            case "8":
                $mes = "agosto";
                break;
            case "9":
                $mes = "setembro";
                break;
            case "10":
                $mes = "outubro";
                break;
            case "11":
                $mes = "novembro";
                break;
            case "12":
                $mes = "dezembro";
                break;
        }
        return $mes;
    }

    public function getMesSimplificado($mes){

        switch ($mes) {
            case "1":
                $mes = "jan";
                break;
            case "2":
                $mes = "fev";
                break;
            case "3":
                $mes = "mar";
                break;
            case "4":
                $mes = "abr";
                break;
            case "5":
                $mes = "mai";
                break;
            case "6":
                $mes = "jun";
                break;
            case "7":
                $mes = "jul";
                break;
            case "8":
                $mes = "ago";
                break;
            case "9":
                $mes = "set";
                break;
            case "10":
                $mes = "out";
                break;
            case "11":
                $mes = "nov";
                break;
            case "12":
                $mes = "dez";
                break;
        }
        return $mes;
    }

}