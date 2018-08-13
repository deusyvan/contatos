<?php 
require 'config.php';
if (empty($_SESSION['cLogin'])){
    header("Location: login.php");
    exit;
}
require 'classes/mensagens.class.php';
$m = new Mensagens();
if(isset($_GET['id']) && !empty($_GET['id'])){
    //Mandando o id para retornar o id depois que excluir
    $id_mensagem = $m->excluirFoto($_GET['id']);
}

//Exclui a foto e volta para edição da mesma mensagem
if(isset($id_mensagem)){
    header("Location: editar-mensagem.php?id=".$id_mensagem);
} else {
    header("Location: minhas-mensagens.php");
}