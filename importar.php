<?php require 'pages/header.php'; ?>

<?php 
if (empty($_SESSION['cLogin']) || $_SESSION['cPerfil'] > 1){
    ?>
    <script type="text/javascript">window.location.href="login.php";</script>
    <?php 
    exit;
}
?>
 	<div class="container">
		<h1>Importar Contatos</h1>
		<form action="processa.php" method="POST" enctype="multipart/form-data">
			<label>Arquivo</label>
			<input type="file" name="arquivo"/><br/><br/>
			<input type="submit" value="Enviar" />
		</form>
		
	</div>
 <?php require 'pages/footer.php';?> 