<?php
class Respostas{
    
    public function getRespostas(){
        global $pdo;
        $array = array();
        $sql = $pdo->prepare("SELECT * FROM respostas WHERE id_usuario  = :id_usuario");
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
    public function addResp($mensagem, $lista, $status){
       global $pdo;
       
       $sql = $pdo->query("SELECT * FROM contatos WHERE id IN (".$lista.")");
       $sql->execute();
       
           if ($sql->rowCount() > 0){
              
               ?>
                 <div class="col-sm-10">
                    <script> 
                      swal("Beleza","Sua lista gerou uma consulta com sucesso!","success");
                    </script>
                 </div>
                <?php
               
               
               $sql = $pdo->prepare("INSERT INTO respostas 
                    SET id_mensagem = :id_mensagem, 
                        lista_contatos_id = :lista_contatos_id, 
                        id_status = :id_status,
                        id_usuario = :id_usuario");
               
               $sql->bindValue(":id_mensagem", $mensagem);
               $sql->bindValue(":lista_contatos_id", $lista);
               $sql->bindValue(":id_status", $status);
               $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
               $sql->execute();
       
           } else {
               ?>
                 <div class="col-sm-10">
                    <script> 
                      swal("Ops!","Ocorreu um erro na sua lista, confira novamente ou chame o Administrador!","error");
                    </script>
                 </div>
                <?php
                exit;
           }
    }
    
    public function inabilitarMensagem($id){
        global $pdo;
        
        $sql = $pdo->prepare("UPDATE mensagens SET id_status = '1' WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
}