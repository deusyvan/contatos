<?php
class Status {
    
    public function getLista(){
        $array = array();
        global $pdo;
        
        $sql = $pdo->query("SELECT * FROM status ORDER BY id DESC");
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}
?>
