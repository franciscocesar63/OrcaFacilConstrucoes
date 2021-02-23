<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=id9518863_tccigor', "id9518863_root", "123456");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

