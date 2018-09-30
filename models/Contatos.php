<?php
class Contatos extends model{
    
    public function getTotalGeral(){
        $sql = $this->db->query("SELECT COUNT(*) as c FROM contatos");
        $sql->execute();
        $row = $sql->fetch();
        return $row['c'];
    }
    public function getTotalWhatzap(){
        $sql = $this->db->query("SELECT COUNT(*) as c FROM contatos WHERE id_status = 11");
        $sql->execute();
        $row = $sql->fetch();
        //print_r($row['c']);
        return $row['c'];
    }
    
    public function getTotalOnLine(){
        $sql = $this->db->query("SELECT COUNT(*) as c FROM contatos WHERE id_status = 13");
        $sql->execute();
        $row = $sql->fetch();
        return $row['c'];
    }
    
    public function getTotalPendentes(){
        $sql = $this->db->query("SELECT COUNT(*) as c FROM contatos WHERE id_status = 7");
        $sql->execute();
        $row = $sql->fetch();
        return $row['c'];
    }
    
    public function getNaoApoia(){
        $sql = $this->db->query("SELECT COUNT(*) as c FROM contatos WHERE id_status = 6");
        $sql->execute();
        $row = $sql->fetch();
        return $row['c'];
    }
    
    public function getSemWhatsap(){
        $sql = $this->db->query("SELECT COUNT(*) as c FROM contatos WHERE id_status = 10");
        $sql->execute();
        $row = $sql->fetch();
        return $row['c'];
    }
    
    public function getAceitos(){
        $sql = $this->db->query("SELECT COUNT(*) as c FROM contatos WHERE id_status = 14");
        $sql->execute();
        $row = $sql->fetch();
        return $row['c'];
    }
}
?>