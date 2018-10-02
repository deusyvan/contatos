<?php 
class Usuarios extends model{
    
    private $array;
    private $id_usuario;
    private $nome;
    private $email;
    private $senha;
    private $perfil;
    public  $erro;
    public 	$numRows;
    
    public function getId_usuario() {
        return $this->id_usuario;
    }
    
    public function setNome($i) {
        $this->nome = $i;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setEmail($i) {
        $this->email = $i;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setSenha($i) {
        $this->senha = md5($i);
    }
    
    public function setPerfil($i) {
        $this->perfil = $i;
    }
    
    public function getPerfil() {
        return $this->perfil;
    }
    
    public function __construct() {
        parent::__construct();
    }


    public function cadastrar($nome, $email,$senha, $telefone, $perfil){
        $sql = $this->db->prepare("SELECT id FROM usuarios WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();
        
        if ($sql->rowCount() == 0) {
            $sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha, telefone = :telefone, perfil = :perfil");
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", md5($senha));
            $sql->bindValue(":telefone", $telefone);
            $sql->bindValue(":perfil", $perfil);
            
            try{
                $sql->execute();
                
            } catch (PDOException $sql){
                $this->erro = "Falha ao incluir os dados: ".$sql->getMessage();
                return false;
            }
            $this->erro = "Dados incluidos com sucesso.";
            return true;
            
        } else {
            $this->erro = "Dados não incluidos, E-mail já cadastrado.";
            return false;
        }
    }
    
    public function salvar() {
        if (!empty($this->id_usuario)) {
            $sql = "UPDATE usuarios
					   SET nome 	= 	?,
						   email 	=	?,
						   senha 	=	?,
						   perfil  	=	?
					WHERE id = ?  ";
            
            $sql = $this->db->prepare($sql);
            $sql->execute(array($this->nome,$this->email,$this->senha,$this->perfil));
        } else {
            $sql = "INSERT INTO usuarios
					   SET nome 	= 	?,
						   email 	=	?,
						   senha 	=	?,
						   perfil  	=	?";
            
            $sql = $this->db->prepare($sql);
            $sql->execute(array($this->nome,$this->email,$this->senha,$this->tipo));
        }
    }
    
    public function getTotalUsuarios() {
        
        $sql = $this->db->query("SELECT COUNT(*) as c FROM usuarios");
        $row = $sql->fetch();
        return $row['c'];
    }
    
    
    public function login ($email, $senha){
            $sql = $this->db->prepare("SELECT id,nome,perfil FROM usuarios WHERE email = :email AND senha = :senha");
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", md5($senha));
        try{
            $sql->execute();
            
        } catch (PDOException $sql){
            $this->erro = "Falha ao conectar com o banco de dados: ".$sql->getMessage();
            return false;
        }

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();
                $_SESSION['cLogin'] = $dado['id'];
                $_SESSION['cNome'] = $dado['nome'];
                $_SESSION['cPerfil'] = $dado['perfil'];
                return TRUE;
              } else {
                $this->erro = "Usuário ou Senha Inválida.";
                return FALSE;
              }
    }
    
    public function getLista(){
        $sql = $this->db->query("SELECT * FROM usuarios ORDER BY nome ASC");
        if($sql->rowCount() > 0){
            $this->numRows = $sql->RowCount();
            $this->array = $sql->fetchAll();
        }
        
        return $this->array;
    }
    
    public function buscaUsuarios($i) {
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        $sql = $this->db->prepare($sql);
        $sql->execute(array($i));
        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();
            $this->id_usuario = $data['id'];
            $this->nome = $data['nome'];
            $this->email = $data['email'];
            $this->senha = $data['senha'];
            $this->perfil = $data['perfil'];
            return true;
        } else {
            return false;
        }
    }
    
    public function buscaUsuariosEmail($e) {
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $sql = $this->db->prepare($sql);
        $sql->execute(array($e));
        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();
            $this->id_usuario = $data['id'];
            $this->nome = $data['nome'];
            $this->email = $data['email'];
            $this->senha = $data['senha'];
            $this->perfil = $data['perfil'];
            return true;
        } else {
            return false;
        }
    }
}
?>