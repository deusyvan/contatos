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
		<h1>Mensagens</h1>
		<a href="add-mensagens.php" class="btn btn-default">Adicionar Mensagem</a>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Imagem</th>
					<th>Número</th>
					<th>Título</th>
					<th>Descrição</th>
					<th>Status</th>
					<th>Data Criação</th>
					<th>Ações</th>
				</tr>
			</thead>
			
			<?php 
			require 'classes/mensagens.class.php';
			$m = new Mensagens();
			$mensagens = $m->getMensagens();
			foreach ($mensagens as $mensagem):			
			?>
			<tr>
				<td>
					<?php if (!empty($mensagem['url'])): ?>
					<img src="assets/images/mensagens/<?php echo $mensagem['url']; ?>" height="50" border="0"/>
					<?php else: ?>
					<img src="assets/images/default.jpg" height="50" border="0"/>
					<?php endif; ?>
				</td>
				<td><?php echo $mensagem['id']; ?></td>
				<td><?php echo $mensagem['titulo']; ?></td>
				<td><?php echo $mensagem['descricao']; ?></td>
				<td><?php echo $mensagem['id_status']; ?></td>
				<td><?php echo $mensagem['data_criacao']; ?></td>	
				<td>
					<a href="editar-mensagem.php?id=<?php echo $mensagem['id']; ?>" class="btn btn-default">Editar</a>
					<a href="excluir-mensagem.php?id=<?php echo $mensagem['id']; ?>" class="btn btn-danger">Excluir</a>
				</td>	
			</tr>
			<?php endforeach; ?>
		
		</table>
	</div>
 <?php require 'pages/footer.php';?> 