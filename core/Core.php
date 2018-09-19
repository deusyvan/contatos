<?php 

class Core {
    
    public function run(){
        
        $url = '/';
        if (isset($_GET['url'])){
            $url .= $_GET['url'];
        }
        
        $params = array();
        
        if (!empty($url) && $url != '/'){
            //Enviou algo além da barra vamos fazer a divisão das coisas
            $url = explode('/', $url);
            
            //Remove o primeiro registro do array pois está em branco, no caso retirado a barra
            array_shift($url);
            
            //Concatena o proximo dado com o controller
            $currentController = $url[0].'Controller';
            
            //Após pegar o controller vamos remover novamente o primeiro
            array_shift($url);
            
            //Verifica se existe e se está preenchido
            if (isset($url[0]) && !empty($url[0])){
                //Se existe definimos a action 
                $currentAction = $url[0];
                
                //Depois de definirmos a action também a excluímos da primeira posição para continuar...
                array_shift($url);
            
            } else {
                //Não existindo definimos a action padrão
                $currentAction = 'index';
            }
            
            //Se ainda tiver itens ainda vamos transferir para o array params
            if (count($url) > 0){
                $params = $url;
            }
            
            
        } else {//Se não enviou nada vai direto para o homecontroller
            $currentController = 'homeController';
            $currentAction = 'index';
        }
        
        if(!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)) {
            $currentController = 'notfoundController';
            $currentAction = 'index';
        }
        
        $c = new $currentController();
        
        call_user_func_array(array($c,$currentAction), $params);
    }
}
