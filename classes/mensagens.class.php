<?php
class Mensagens{
    
    public function getMensagens(){
        global $pdo;
        $array = array();
        $sql = $pdo->prepare("SELECT *, 
            (select mensagens_imagens.url 
             from mensagens_imagens 
             where mensagens_imagens.id_mensagem = mensagens.id limit 1) as url 
            FROM mensagens where id_status BETWEEN 2 AND 11 OR id_status is null");
        
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
    public function getMensagem($id){
       $array = array();
       global $pdo;
       $sql = $pdo->prepare("SELECT * FROM mensagens WHERE id = :id");
       $sql->bindValue(":id", $id);
       $sql->execute();
       
       if ($sql->rowCount() > 0){
           $array = $sql->fetch();
       }
       
       return $array;
    }
    
    public function addMsg($titulo, $categoria, $descricao, $status){
       global $pdo;
       
       $sql = $pdo->prepare("INSERT INTO mensagens 
            SET id_usuario = :id_usuario, 
                id_categoria = :id_categoria, 
                titulo = :titulo,
                descricao = :descricao,
                id_status = :id_status,
                data_criacao = now()");
       $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
       $sql->bindValue(":id_categoria", $categoria);
       $sql->bindValue(":titulo", $titulo);
       $sql->bindValue(":descricao", $descricao);
       $sql->bindValue(":id_status", $status);
       $sql->execute();
    }
    
    public function editMsg($titulo, $categoria, $descricao, $status,$id){
        global $pdo;
        
        $sql = $pdo->prepare("UPDATE mensagens
            SET id_usuario = :id_usuario,
                id_categoria = :id_categoria,
                titulo = :titulo,
                descricao = :descricao,
                id_status = :id_status,
                data_alteracao = now() WHERE id = :id");
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->bindValue(":id_categoria", $categoria);
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":id_status", $status);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    
    public function inabilitarMensagem($id){
        global $pdo;
        
        $sql = $pdo->prepare("UPDATE mensagens SET id_status = '1' WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
}