<?php
class Status extends model{
    
    public function getLista(){
        $array = array();
        $sql = $this->db->query("SELECT * FROM status ORDER BY id DESC");
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        return $array;
    }
}