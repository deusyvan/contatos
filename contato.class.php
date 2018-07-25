<?php
class Contato {
    //privada para poder ser usado em toda a classe
    private $pdo;
    
    // para facilitar conexao aqui dentro do construtor
    public function __construct(){
        
        //acessando na propria classe this
        $this->pdo = new PDO("mysql:dbname=projeto_contatos;host=localhost","admin","admin@12");
        
        echo "Fez a conexão no banco";
    }
}