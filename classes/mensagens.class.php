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
}