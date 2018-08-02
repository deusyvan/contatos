<?php
class Grupos {
    
    public function getLista(){
        $array = array();
        global $pdo;
        
        $sql = $pdo->query("SELECT * FROM grupos ORDER BY nome_grupo ASC");
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}
?>
