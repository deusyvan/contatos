<?php 
session_start();

try {
    
    $db = new PDO("mysql:dbname=projeto_contatos;host=localhost", "admin", "admin@12");
    
} catch ( PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}


?>