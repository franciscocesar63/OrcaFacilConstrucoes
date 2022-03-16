<?php

class Conexao {

    public function conectar() {
        try {
            $pdo = new PDO('mysql:host=156.67.72.151;dbname=u626289327_igor', "u626289327_igor", "Igor@123");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }

        return $pdo;
    }

}
 