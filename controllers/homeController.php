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
       
        //Passamos agora a chamar nosso template
        $this->loadTemplate('home',$dados);
        
    }
   
}

?>