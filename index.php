<?php require 'pages/header.php';
	if ($_SESSION['cPerfil'] == 3){
?>
    <div class="col-sm-10">
      <script> 
      	swal("Ops!","Você ainda não foi autorizado pelo Administrador!","error");
      </script>
 	</div>
<?php
  }
?>
	<div class="container-fluid">
		<div class="jumbotron">
			<h2>Bem vindo a Agenda Eletrônica</h2>
			<p>Temos cadastrados mais de 30 contatos</p>
		</div>
		
		<div class="row">
			<div class="col-sm-3">
				<h4>Pesquisa Avançada</h4>
			</div>
			<div class="col-sm-9">
				<h4>Últimos contatos cadastrados</h4>
			</div>
		</div>
	</div>
<?php require 'pages/footer.php'?>