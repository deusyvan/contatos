<?php
class Usuarios {
    
    public function cadastrar($nome, $email,$senha, $telefone, $perfil){
        global $pdo;
        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();
        
        if ($sql->rowCount() == 0) {
            $sql = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha, telefone = :telefone, perfil = :perfil");
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", md5($senha));
            $sql->bindValue(":telefone", $telefone);
            $sql->bindValue(":perfil", $perfil);
            $sql->execute();
            
            return true;
            
        } else {
            return false;
            
        }
    }
    
    public function login ($email, $senha){
       
        global $pdo;
        
        $sql = $pdo->prepare("SELECT id,nome,perfil FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", md5($senha));
        $sql->execute();
        $dado = $sql->fetch();
        
        if($sql->rowCount() > 0 && $dado['perfil'] <=3){
            $_SESSION['cLogin'] = $dado['id'];
            $_SESSION['cNome'] = $dado['nome'];
            $_SESSION['cPerfil'] = $dado['perfil'];
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function getLista(){
        $array = array();
        global $pdo;
        
        $sql = $pdo->query("SELECT * FROM usuarios ORDER BY nome ASC");
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}

?>