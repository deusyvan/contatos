<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development'){
    
    define("BASE_URL", "http://localhost/contatos/");
    $config['dbname'] = 'projeto_contatos';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'admin';
    $config['dbpass'] = 'admin@12';
    
} else {
    //Ainda será definido banco e host para produção
    define("BASE_URL", "http://meusite.com/contatos/");
    $config['dbname'] = 'projeto_contatos';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'admin';
    $config['dbpass'] = 'admin@12';
}
global $db;
try {
    
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
    
} catch ( PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}
?>
