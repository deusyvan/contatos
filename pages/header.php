<?php require 'config.php'; ?>
<html>
<head>
	<title>Contatos</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/sweetalert.css" />
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script type="text/javascript" src="assets/js/sweetalert.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="./" class="navbar-brand">Contatos</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])):?>
    				<li><a href="#">Usuário: <?php echo $_SESSION['cNome']; ?></a></li>
    				<li><a href="meus-contatos.php">Meus Contatos</a></li>
    				<li><a href="minhas-mensagens.php">Mensagens</a></li>
    				<li><a href="minhas-respostas.php">Minhas Respostas</a></li>
    				<li><a href="sair.php">Sair</a></li>
    			<?php  else:?>
        			<li><a href="cadastre-se.php">Cadastre-se</a></li>
        			<li><a href="login.php">Login</a></li>
    			<?php endif; ?>
			</ul>
		</div>
	</nav>