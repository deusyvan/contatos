<?php
class Mensagens{
    
    public function getMensagens(){
        global $pdo;
        $array = array();
        $sql = $pdo->prepare("SELECT *, 
            (select mensagens_imagens.url 
             from mensagens_imagens 
             where mensagens_imagens.id_mensagem = mensagens.id limit 1) as url,
                (select status.nome_status from status where status.id = mensagens.id_status) as status 
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
       
       //Preencher o nosso $info na página de edição
       if ($sql->rowCount() > 0 ){
           $array = $sql->fetch();
           $array['fotos'] = array();
           
           $sql = $pdo->prepare("SELECT id,url FROM mensagens_imagens WHERE id_mensagem = :id_mensagem");
           $sql->bindValue(":id_mensagem", $id);
           $sql->execute();
           
           //Se tiver alguma foto preecher o array que estava em branco
           if ($sql->rowCount() > 0){
               $array['fotos'] = $sql->fetchAll();
           }
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
    
    public function editMsg($titulo, $categoria, $descricao, $status,$fotos, $id){
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
        
        if (count($fotos) > 0){
            for ($q=0; $q<count($fotos['tmp_name']);$q++){
                //Definindo o tipo de arquivo para cada foto
                $tipo = $fotos['type'][$q];
                
                //Aceitando fotos apenas jpeg e png
                if (in_array($tipo, array('image/jpeg', 'image/png'))){
                    //Criando um nome para o arquivo:
                    $tmpname = md5(time().rand(0,9999)).'.jpg';
                    
                    //Movendo o arquivo para a pasta destino
                    move_uploaded_file($fotos['tmp_name'][$q], 'assets/images/mensagens/'.$tmpname);
                    
                    //Redimensionar o arquivo:
                    //Pegando a largura e altura originais
                    list($width_orig, $height_orig) = getimagesize('assets/images/mensagens/'.$tmpname);
                    
                    //Pegamos o Ration através das propriedades de largura e altura
                    $ratio = $width_orig/$height_orig;
                    
                    //Definindo o limite para a largura e altura
                    $width = 500;
                    $height = 500;
                    
                    //Calculando para alterar a largura ou altura de acordo com a proporção da imagem
                    if ($width/$height > $ratio){
                        $width = $height*$ratio;
                    } else {
                        $height = $width/$ratio;
                    }
                    
                    //Criando nossa nova imagem com o tamanho correto
                    $img = imagecreatetruecolor($width, $height);
                    
                    //Carregar no phpgd a nossa imagem original
                    //Vamos ver qual é o tipo
                    if ($tipo == 'image/jpeg') {
                        $origi = imagecreatefromjpeg('assets/images/mensagens/'.$tmpname);
                    } elseif ($tipo == 'image/png'){
                        $origi = imagecreatefrompng('assets/images/mensagens/'.$tmpname);
                    }
                    
                    //Inserindo a imagem original dentro da nova imagem com o tamanho correto
                    imagecopyresampled($img, $origi, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
                    
                    //Salvar a imagem com a qualidade 80 que é o padrão otimizado
                    imagejpeg($img, 'assets/images/mensagens/'.$tmpname, 80);
                    
                    //Salvar a imagem no banco de dados
                    $sql = $pdo->prepare("INSERT INTO mensagens_imagens SET id_mensagem = :id_mensagem, url = :url");
                    $sql->bindValue(":id_mensagem", $id);
                    $sql->bindValue(":url", $tmpname);
                    $sql->execute();
                }
            }
        }
    }
    
    public function inabilitarMensagem($id){
        global $pdo;
        
        $sql = $pdo->prepare("UPDATE mensagens SET id_status = '1' WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    
    
    public function excluirFoto($id){
        global $pdo;
        
        //Antes de deletar pegamos o id da mensagem que a foto faz parte
        $id_mensagem = 0;
        $sql = $pdo->prepare("SELECT id_mensagem FROM mensagens_imagens WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            $row = $sql->fetch();
            $id_mensagem = $row['id_mensagem'];
        }
        
        //Deleta a foto e retorna o id
        $sql = $pdo->prepare("DELETE FROM mensagens_imagens WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        return $id_mensagem;
    }
}