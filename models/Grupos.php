<?php 
class Grupos extends model{
    
    public function getLista(){
        $array = array();
        $sql = $this->db->query("SELECT * FROM grupos ORDER BY nome_grupo ASC");
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}