<?php 
require 'config.php';
if (empty($_SESSION['cLogin'])){
    header("Location: login.php");
    exit;
}

require 'classes/mensagens.class.php';
$m = new Mensagens();

if (isset($_GET['id']) && !empty($_GET['id'])){
    $m->excluirMensagem($_GET['id']);
}

header("Location: minhas-mensagens.php");
 