<?php require 'pages/header.php'; ?>

<?php 
if (empty($_SESSION['cLogin'])){
    ?>
    <script type="text/javascript">window.location.href="login.php";</script>
    <?php 
    exit;
}
?>


 	<div class="container">
		<h1>Minhas Mensagens</h1>
		<a href="add-mensagens.php" class="btn btn-default">Adicionar Mensagem</a>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Imagem</th>
					<th>Título</th>
					<th>Descrição</th>
					<th>Status</th>
					<th>Data Envio</th>
					<th>Ações</th>
				</tr>
			</thead>
			
			<?php 
			require 'classes/mensagens.class.php';
			$m = new Mensagens();
			$mensagens = $m->getMinhasMensagens();
			foreach ($mensagens as $mensagem):			
			?>
			<tr>
				<td><img src="assets/images/mensagens/<?php echo $mensagem['url']; ?>" border="0"/></td>
				<td><?php echo $mensagem['titulo']; ?></td>
				<td><?php echo $mensagem['descricao']; ?></td>
				<td><?php echo $mensagem['status']; ?></td>
				<td><?php echo $mensagem['data_envio']; ?></td>	
				<td></td>	
			</tr>
			<?php endforeach; ?>
		
		</table>
	</div>
 <?php require 'pages/footer.php';?> 