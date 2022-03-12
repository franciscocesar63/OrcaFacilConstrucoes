<?php

class Conexao {

    public function conectar() {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=igor', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }

        return $pdo;
    }

}
