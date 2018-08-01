<?php
class Status {
    
    public function getLista(){
        $array = array();
        global $pdo;
        
        $sql = $pdo->query("SELECT * FROM status");
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}
?>
