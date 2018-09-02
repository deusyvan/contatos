<?php 
require 'config.php';
if (empty($_SESSION['cLogin'])){
    header("Location: login.php");
    exit;
}

require 'classes/contatos.class.php';
$c = new Contatos();

if (isset($_GET['id']) && !empty($_GET['id'])){
    $c->inabilitarContato($_GET['id']);
}

header("Location: contatos.php");
 