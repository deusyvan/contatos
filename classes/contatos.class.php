<?php
class Contatos{
    
    public function getMeusContatos(){
        global $pdo;
        $array = array();
        $sql = $pdo->prepare("SELECT * FROM contatos where id_usuario  = :id_usuario");
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}