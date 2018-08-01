<?php
class Mensagens{
    
    public function getMinhasMensagens(){
        global $pdo;
        $array = array();
        $sql = $pdo->prepare("SELECT *, 
            (select mensagens_imagens.url 
             from mensagens_imagens 
             where mensagens_imagens.id_mensagem = mensagens.id limit 1) as url 
            FROM mensagens where id_usuario  = :id_usuario");
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
    public function addMsg($titulo, $categoria, $descricao, $status,$data_envio){
       global $pdo;
       
       $sql = $pdo->prepare("INSERT INTO mensagens 
            SET id_usuario = :id_usuario, 
                id_categoria = :id_categoria, 
                titulo = :titulo,
                descricao = :descricao,
                id_status = :id_status,
                data_criacao = now(),
                data_envio = :data_envio");
       $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
       $sql->bindValue(":id_categoria", $categoria);
       $sql->bindValue(":titulo", $titulo);
       $sql->bindValue(":descricao", $descricao);
       $sql->bindValue(":id_status", $status);
       $sql->bindValue(":data_envio", $data_envio);
       $sql->execute();
    }
    
    public function excluirMensagem($id){
        global $pdo;
        
        $sql = $pdo->prepare("DELETE FROM mensagens_imagens WHERE id_mensagem = :id_mensagem");
        $sql->bindValue(":id_mensagem", $id);
        $sql->execute();
        
        $sql = $pdo->prepare("DELETE FROM mensagens WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
}