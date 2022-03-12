<?php


class Conexao
{


    public function conectar()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=u626289327_tccigor', "u626289327_tccigor", "NE]0gR[5u");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }

        return $pdo;
    }
}
