<?php

class meusContatosController extends controller{

    public function index(){
            $dados = array();
            //Para verificar se está logado
            /* if (empty($_SESSION['cLogin'])){
                header("Location: ".BASE_URL."login");
                exit;
            }  */
            
            $c = new Contatos();
            $g = new Grupos();
            $s = new Status();
            
            if (isset($_POST['nome']) && !empty($_POST['nome'])){
                $grupo = addslashes($_POST['grupo']);
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $celular = addslashes($_POST['celular']);
                $residencia = addslashes($_POST['residencia']);
                $endereco = addslashes($_POST['endereco']);
                $status = addslashes($_POST['status']);
                $usuario = $_SESSION['cLogin'];
                
                echo $grupo.' - '.$nome.'- '.$email.' - '.$celular.' - '.$residencia.' - '.$endereco.' - '.$status.' - '.$usuario;
                $c->addContato($grupo, $nome, $email, $celular,$residencia, $endereco, $status, $usuario);
                ?>
                   <div class="alert alert-success">Contato adicionado com sucesso!</div>
               <?php 
            }
            
            $lista = $c->getMeusContatos();
            $grupos = $g->getLista();
            $listaStatus = $s->getLista();
            
            $dados['lista'] = $lista;
            $dados['grupos'] = $grupos;
            $dados['listaStatus'] = $listaStatus;
            
            $this->loadTemplate('meusContatos', $dados);
        }
    }