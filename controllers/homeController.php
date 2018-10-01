<?php
/*************************************************************************************************************
 * local/script name: ./controllers/homeController.php                                                       *
 * Criado por: 2º Sgt Deusyvan deusyvan@gmail.com / contato@dfsweb.com.br                                    *
 * Inclui arquivo de tipo: Controlador entre view model                                                      *
 * Configura o Template fazendo sua definição                                                                *
 * Realiza o processamento no servidor, busca dados no model e envia tudo para as view                       *
 * **********************************************************************************************************/
 
class homeController extends controller{
    
    //Todo controller possui seu index
    public function index(){
       //Tudo é acessado apartir do index e ele é quem controi o resto conforme precisamos
        
        //Vamos enviar à View dados para serem mostrados na página
        $dados = array();
        
        
        
       //Puxaremos o nosso view após gerado todas a logica anteriormente e enviando junto o array dados
       //$this->loadView('home',$dados);
       
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
       
        if (isset($_SESSION['cLogin']) && empty($_SESSION['cLogin']) == FALSE) {
            $this->loadTemplate('home',$dados);
        } else {
            $this->loadView('login',$dados);
            //header("Location: ".BASE_URL."login");
            //exit;
        }
    }
}