<?php
/*************************************************************************************************************
 * local/script name: ./controllers/loginController.php                                                       *
 * Criado por: Deusyvan deusyvan@gmail.com / contato@dfsweb.com.br                                    *
 * Inclui arquivo de tipo: Controlador entre view model                                                      *
 * Configura o Template fazendo sua identificação com o usuário                                                                *
 * **********************************************************************************************************/
 
class loginController extends controller{
    
    public function index(){
        $dados = array();
        error_reporting(E_ALL);
        ini_set("display_errors", "On");
        
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            
            $u = new Usuarios();
            
            try{
                $valida = $u->login($email,$senha);
            } catch (PDOException $e) {
                echo "Falhou: ".$e->getMessage();
                header("Location: ".BASE_URL);
                exit;
            }

                if ($valida) {
                    //Buscando objetos das classes
                    $c = new Contatos();
                    
                    //Chama funções
                    $total_contatos = $c->getTotalGeral();
                    $whatzap = $c->getTotalWhatzap();
                    $on_line = $c->getTotalOnLine();
                    $total_pendentes = $c->getTotalPendentes();
                    $total_nao_apoia = $c->getNaoApoia();
                    $total_sem_whatzap = $c->getSemWhatsap();
                    $total_aceitos = $c->getAceitos();
                    
                    //Inserindo resultado como objeto para enviar por dados
                    $dados['total_contatos'] = $total_contatos;
                    $dados['total_whatzap'] = $whatzap;
                    $dados['total_online'] = $on_line;
                    $dados['total_pendentes'] = $total_pendentes;
                    $dados['total_nao_apoia'] = $total_nao_apoia;
                    $dados['total_sem_whatzap'] = $total_sem_whatzap;
                    $dados['total_aceitos'] = $total_aceitos;
                    $this->loadTemplate('home',$dados);
                    exit;
                } else {
                    $erro = $u->erro; 
                    header("Location: ".BASE_URL);
                    exit;
                }
        } 

        $this->loadView('login',$dados);
       
    }
}