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
		<h1>Respostas</h1>
		<a href="add-respostas.php" class="btn btn-default">Adicionar Resposta</a>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nº Resposta</th>
					<th>Nº Mensagem</th>
					<th>Lista de Contatos</th>
					<th>Status</th>
					<th>Data de Envio</th>
					<th>Ações</th>
				</tr>
			</thead>
			
			<?php 
			require 'classes/respostas.class.php';
			$r = new Respostas();
			$respostas = $r->getRespostas();
			foreach ($respostas as $resposta):			
			?>
			<tr>
				<td><?php echo $resposta['id']; ?></td>
				<td><?php echo $resposta['id_mensagem']; ?></td>
				<td><?php echo $resposta['lista_contatos_id']; ?></td>
				<td><?php echo utf8_decode($resposta['status']); ?></td>
				<td><?php echo $resposta['data_envio']; ?></td>	
				<td nowrap="nowrap">
				<?php if($resposta['id_status'] == 9):?>
					<p>OK</p>
				<?php else: ?>
					<a href="editar-resposta.php?id=<?php echo $resposta['id']; ?>" class="btn btn-default">Editar</a>
					<a href="excluir-resposta.php?id=<?php echo $resposta['id']; ?>" class="btn btn-danger">Excluir</a>
				<?php endif; ?>	
				</td>
			</tr>
			<?php endforeach; ?>
		
		</table>
	</div>
 <?php require 'pages/footer.php';?> 