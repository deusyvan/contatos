<?php
class Contatos{
    
    public function getMeusContatos(){
        global $pdo;
        $array = array();
        $sql = $pdo->prepare("SELECT *,(select status.nome_status from status where status.id = contatos.id_status) as status FROM contatos where id_usuario  = :id_usuario 
                                AND id_status BETWEEN 2 AND 13 OR id_usuario  = :id_usuario AND id_status is null order by id_status desc");
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
        
    }
    
    public function getMeusContatos(){
        global $pdo;
        $array = array();
        $sql = $pdo->query("SELECT *,(select status.nome_status from status where status.id = contatos.id_status) as status 
                             FROM contatos order by id asc");
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
        
    }
    
    public function getContato($id){
        $array = array();
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM contatos WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        
        return $array;
    }
    
    public function addContato($grupo, $nome, $email, $celular,$residencial, $endereco, $status){
        global $pdo;
        
        $sql = $pdo->prepare("INSERT INTO contatos
            SET nome = :nome,
                endereco = :endereco,
                email1 = :email,
                mobile = :celular,
                pager = :residencial,
                id_grupo = :id_grupo,
                id_usuario = :id_usuario,
                id_status = :id_status");
        
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":endereco", $endereco);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":celular", $celular);
        $sql->bindValue(":residencial", $residencial);
        $sql->bindValue(":id_grupo", $grupo);
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->bindValue(":id_status", $status);
        $sql->execute();
    }
    
    public function editContato($grupo, $nome, $email, $celular,$residencial,$endereco, $status, $genero, $email2, $email3, 
                                $fone, $id_graduacao, $id_om, $id_cidade, $id){
        global $pdo;
        
        $sql = $pdo->prepare("UPDATE contatos
            SET 
                id_grupo = :id_grupo,
                nome = :nome,
                email1 = :email,
                mobile = :celular,
                pager = :residencial,
                endereco = :endereco,
                id_status = :id_status,
                genero = :genero,
                email2 = :email2,
                email3 = :email3,
                outro_fone = :fone,
                id_graduacao = :id_graduacao,
                id_om = :id_om,
                id_cidade = :id_cidade,
                id_usuario = :id_usuario WHERE id = :id");
        $sql->bindValue(":id_grupo", $grupo);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":genero", $genero);
        $sql->bindValue(":endereco", $endereco);
        $sql->bindValue(":email2", $email2);
        $sql->bindValue(":email3", $email3);
        $sql->bindValue(":celular", $celular);
        $sql->bindValue(":residencial", $residencial);
        $sql->bindValue(":fone", $fone);
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->bindValue(":id_status", $status);
        $sql->bindValue(":id_graduacao", $id_graduacao);
        $sql->bindValue(":id_om", $id_om);
        $sql->bindValue(":id_cidade", $id_cidade);
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        $nome = "";
        $sql = $pdo->prepare("SELECT nome FROM contatos WHERE id = :id AND nome LIKE '".$id."%'");
        $sql->bindValue(":id", $id);
        $sql->execute();
        $nome = $sql->fetch();
        
        if (!empty($nome)){
            if($status == 13){
                $sql = $pdo->prepare("UPDATE contatos SET id_status = '12' WHERE id = :id");
                $sql->bindValue(":id", $id);
                $sql->execute();
            }
        } else {
            $sql = $pdo->prepare("UPDATE contatos SET nome = CONCAT(".$id.",' - ',nome) WHERE id = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();
            if($status == 13){
                $sql = $pdo->prepare("UPDATE contatos SET id_status = '12' WHERE id = :id");
                $sql->bindValue(":id", $id);
                $sql->execute();
            }
        }
    }
    
    public function inabilitarContato($id){
        $nome = "";
        global $pdo;
        $sql = $pdo->prepare("SELECT nome FROM contatos WHERE id = :id AND nome LIKE '".$id."%'");
        $sql->bindValue(":id", $id);
        $sql->execute();
        $nome = $sql->fetch();
        
        if (!empty($nome)){
            $sql = $pdo->prepare("UPDATE contatos SET id_status = '1' WHERE id = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();
        } else {
            $sql = $pdo->prepare("UPDATE contatos SET nome = CONCAT(".$id.",' - ',nome), id_status = '1' WHERE id = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();
        }
        
    }
}