<?php require 'pages/header.php';
	if ($_SESSION['cPerfil'] == 3){
    ?>
        <div class="col-sm-10">
          <script> 
          	swal("Ops!","Você ainda não foi autorizado pelo Administrador!","error");
          </script>
     	</div>
    <?php
               
	} else {
?>
	<div class="container-fluid">
		<div class="jumbotron">
			<h2>Bem vindo ao Sistema de Cadastro</h2>
			<p>O Brasil rumo à Mudanças!</p>
		</div>
		
		<div class="row">
			<div class="col-sm-3">
				<h4>Obrigado!</h4>
			</div>
			<div class="col-sm-9">
				<h4>Aguarde nosso contato!</h4>
			</div>
		</div>
	</div>
<?php 
	}
	
require 'pages/footer.php';

?>