<?php
class Contatos{
    
    public function getMeusContatos(){
        global $pdo;
        $array = array();
        $sql = $pdo->prepare("SELECT * FROM contatos where id_usuario  = :id_usuario 
                                AND id_status BETWEEN 2 AND 11 OR id_usuario  = :id_usuario AND id_status is null");
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll();
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