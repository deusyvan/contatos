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
    
    public function getListaOnLine(){
        $array = array();
        $sql = $this->db->query("SELECT contatos.id as id, usuarios.nome as usuario,contatos.nome as nome, 
                                contatos.celular as celular FROM contatos
                                INNER JOIN usuarios ON usuarios.id = contatos.id_usuario
                                WHERE contatos.id_status = '13' ORDER BY nome ASC");
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
    public function getListaComWhatzap(){
        $array = array();
        $sql = $this->db->query("SELECT contatos.id as id, usuarios.nome as usuario,contatos.nome as nome,
                                contatos.celular as celular FROM contatos
                                INNER JOIN usuarios ON usuarios.id = contatos.id_usuario
                                WHERE contatos.id_status = '11' ORDER BY nome ASC");
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
    public function getListaApoia(){
        $array = array();
        $sql = $this->db->query("SELECT contatos.id as id, usuarios.nome as usuario,contatos.nome as nome,
                                contatos.celular as celular FROM contatos
                                INNER JOIN usuarios ON usuarios.id = contatos.id_usuario
                                WHERE contatos.id_status = '14' ORDER BY nome ASC");
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
    public function getListaSemApoio(){
        $array = array();
        $sql = $this->db->query("SELECT contatos.id as id, usuarios.nome as usuario,contatos.nome as nome,
                                contatos.celular as celular FROM contatos
                                INNER JOIN usuarios ON usuarios.id = contatos.id_usuario
                                WHERE contatos.id_status = '6' ORDER BY nome ASC");
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
    public function getMeusContatos(){
        $array = array();
        $sql = $this->db->prepare("SELECT *,(select status.nome_status from status where status.id = contatos.id_status) as status FROM contatos where id_usuario  = :id_usuario
                                AND id_status BETWEEN 2 AND 15 OR id_usuario  = :id_usuario AND id_status is null order by id");
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
    public function getTodosContatos(){
        global $pdo;
        $array = array();
        $sql = $this->db->query("SELECT *,(select status.nome_status from status where status.id = contatos.id_status) as status
                             FROM contatos order by id asc");
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        return $array;
    }
}
?>