<?php 

/*Nosso ajudador dos controllers*/

class controller {
    
    //Basicamente vai carregar o view que precisamos junto com os dados ou não do array
    public function loadView($viewName, $viewData = array()){
        
        //Função que vai pegar os indices do array e transforma em uma variável sendo seu valor o proprio valor
        //para serem acessadas na view
        extract($viewData);
        
        //Realiza um require que chama nossa view
        require 'views/'.$viewName.'.php';
        
    }
    
    //Função recebe as mesmas informações do controller mas chamando um único arquivo o nosso template, será nossa estrutura geral de html
    public function loadTemplate($viewName, $viewData = array()){
        require 'views/template.php';
    }
    
    public function loadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }
}
