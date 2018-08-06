<?php 
require 'config.php';
if (empty($_SESSION['cLogin'])){
    header("Location: login.php");
    exit;
}

require 'classes/respostas.class.php';
$r = new Respostas();

if (isset($_GET['id']) && !empty($_GET['id'])){
    $r->inabilitarResposta($_GET['id']);
}

header("Location: minhas-respostas.php");
 