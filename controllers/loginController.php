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
       
        //Buscando objetos das classes
        $l = new Login();
        
        //Chama funções
        //$total_contatos = $c->getTotalGeral();
        
        echo var_dump($l);
        
        //Inserindo resultado como objeto para enviar por dados
        //$dados['total_contatos'] = $total_contatos; 
        
       
        //Passamos agora a chamar nosso template
        $this->loadTemplate('login',$dados);
        
    }
   
}

?>