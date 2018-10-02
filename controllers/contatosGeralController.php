<?php

class contatosGeralController extends controller{

    public function index(){
            $dados = array();
            //Para verificar se está logado
            /* if (empty($_SESSION['cLogin'])){
                header("Location: ".BASE_URL."login");
                exit;
            }  */
            
            $c = new Contatos();
            
            $lista = $c->getTodosContatos();
            $dados['lista'] = $lista;
            $this->loadTemplate('contatosGeral', $dados);
        }
    }