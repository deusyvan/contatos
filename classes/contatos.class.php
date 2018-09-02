<?php
class Contatos{
    
    public function getMeusContatos(){
        global $pdo;
        $array = array();
        $sql = $pdo->prepare("SELECT *,(select status.nome_status from status where status.id = contatos.id_status) as status FROM contatos where id_usuario  = :id_usuario 
                                AND id_status BETWEEN 2 AND 13 OR id_usuario  = :id_usuario AND id_status is null order by id");
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
    
    public function getContatos($lista){
        global $pdo;
        $array = array();
        $str = preg_replace('/[^\d\,]/', '',$lista);
        $str2 = str_replace(",", ", ", $str);
        $sql = $pdo->query("SELECT * FROM contatos WHERE id IN (".$str2.") AND id_status > 1");
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchALL();
        }
        
        return $array;
    }
    
    public function verificaContato($celular){
        $array = array();
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM contatos WHERE celular like :celular");
        $sql->bindValue(":celular", $celular);
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetch();
        } 
        
        return $array;
        
    }
    
    public function addContato($nome, $ddd, $celular, $id_grupo){
//                                $cpf, $endereco, $ddd, $celular, $residencia, $bairro, $numero,
//                                $complemento, $cidade,$estado, $cep){
        global $pdo;
        
        $sql = $pdo->prepare("INSERT INTO contatos
            SET nome = :nome, ddd = :ddd, celular = :celular, id_grupo = :id_grupo, id_status='13'");
//                cpf = :cpf,
//                endereco = :endereco,
//                ddd = :ddd, 
//                email1 = :email,
//                celular = :celular,
//                residencia = :residencia,
//                id_grupo = :id_grupo,
//               id_usuario = :id_usuario,
//                id_status = :id_status");
        
        $sql->bindValue(":nome", $nome);
//        $sql->bindValue(":endereco", $endereco);
//        $sql->bindValue(":email", $email);
        $sql->bindValue(":ddd", $ddd);
        $sql->bindValue(":celular", $celular);
        $sql->bindValue(":id_grupo", $id_grupo);
//        $sql->bindValue(":residencia", $residencia);
//        $sql->bindValue(":id_grupo", $grupo);
//        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
//        $sql->bindValue(":id_status", $status);
        $sql->execute();
    }
    
    public function adicionar($nome, $grupo, $email, $celular, $residencia, $endereco, $status, $id_usuario){
        global $pdo;
        
        $sql = $pdo->prepare("INSERT INTO contatos
            SET nome = :nome, id_grupo = :id_grupo, email1 = :email, celular = :celular,
                residencia = :residencia, endereco = :endereco, id_status = :status, id_usuario = :id_usuario");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":id_grupo", $grupo);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":celular", $celular);
        $sql->bindValue(":residencia", $residencia);
        $sql->bindValue(":endereco", $endereco);
        $sql->bindValue(":status", $status);
        $sql->bindValue(":id_usuario", $id_usuario);
        $sql->execute();
    }
    
    
    public function atualiza($nome, $ddd, $celular, $id_grupo, $id){
 //       $cpf, $endereco, $email, $ddd, $celular, $residencia, $bairro, $numero,
 //       $complemento, $cidade,$estado, $cep, $id){
        
            global $pdo;
            
            $sql = $pdo->prepare("UPDATE contatos
            SET
                nome = :nome, ddd = :ddd, celular = :celular, id_grupo = :id_grupo, id_status = '13' WHERE id = :id");
//                cpf = :cpf,
//                endereco = :endereco,
//                email1 = :email,
//                ddd = :ddd,
//                celular = :celular,
//                residencia = :residencia,
//                bairro = :bairro,
//                numero = :numero,
//                complemento = :complemento,
//                cidade = :cidade,
//                estado = :estado,
//                cep = :cep,
//                WHERE id = :id"); 
            $sql->bindValue(":nome", $nome);
//            $sql->bindValue(":cpf", $cpf);
//            $sql->bindValue(":endereco", $endereco);
//            $sql->bindValue(":email", $email);
//            $sql->bindValue(":ddd", $ddd);
            $sql->bindValue(":ddd", $ddd);
            $sql->bindValue(":celular", $celular);
            $sql->bindValue(":id_grupo", $id_grupo);
//            $sql->bindValue(":residencia", $residencia);
//            $sql->bindValue(":bairro", $bairro);
//            $sql->bindValue(":numero", $numero);
//            $sql->bindValue(":complemento", $complemento);
//            $sql->bindValue(":cidade", $cidade);
//            $sql->bindValue(":estado", $estado);
//            $sql->bindValue(":cep", $cep);
            $sql->bindValue(":id", $id);
            $sql->execute();
//            echo "atualizou <br/>";
//            $nome = "";
//            $sql = $pdo->prepare("SELECT nome FROM contatos WHERE id = :id AND nome LIKE '".$id."%'");
//            $sql->bindValue(":id", $id);
//            $sql->execute();
//            $nome = $sql->fetch();
    }
    
    public function editContato($grupo, $nome, $email, $celular,$residencia ,$endereco, $status, $sexo, $email2, $ddd, 
                                $fone, $cidade, $bairro, $numero, $complemento, $id){
        global $pdo;
        
        $sql = $pdo->prepare("UPDATE contatos
            SET 
                id_grupo = :id_grupo,
                nome = :nome,
                email1 = :email,
                celular = :celular,
                residencia = :residencia,
                endereco = :endereco,
                id_status = :id_status,
                sexo = :sexo,
                email2 = :email2,
                ddd = :ddd,
                outro_fone = :fone,
                cidade = :cidade,
                bairro = :bairro,
                numero = :numero,
                complemento = :complemento,
                id_usuario = :id_usuario WHERE id = :id");
        $sql->bindValue(":id_grupo", $grupo);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":sexo", $sexo);
        $sql->bindValue(":endereco", $endereco);
        $sql->bindValue(":email2", $email2);
        $sql->bindValue(":ddd", $ddd);
        $sql->bindValue(":celular", $celular);
        $sql->bindValue(":residencia", $residencia);
        $sql->bindValue(":fone", $fone);
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->bindValue(":id_status", $status);
        $sql->bindValue(":cidade", $cidade);
        $sql->bindValue(":bairro", $bairro);
        $sql->bindValue(":numero", $numero);
        $sql->bindValue(":complemento", $complemento);
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