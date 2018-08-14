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
		<h1>Todos Contatos</h1>
		<a href="add-contatos.php" class="btn btn-default">Adicionar Contato</a>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Endereço</th>
					<th>E-mail</th>
					<th>Celular</th>
					<th>Status</th>
					<th>Ações</th>
				</tr>
			</thead>
			
			<?php 
			require 'classes/contatos.class.php';
			$c = new Contatos();
			
			$contatos = $c->getTodosContatos();
			foreach ($contatos as $contato):			
			?>
			<tr>
				<td><?php echo $contato['nome']; ?></td>
				<td><?php echo $contato['endereco']; ?></td>
				<td><?php echo $contato['email1']; ?></td>
				<td><?php echo $contato['celular']; ?></td>	
				<td><?php echo $contato['status']; ?></td>
				<td>
					<a href="editar-contato.php?id=<?php echo $contato['id']; ?>" class="btn btn-default">Editar</a>
					<a href="excluir-contato.php?id=<?php echo $contato['id']; ?>" class="btn btn-danger">Excluir</a>
				</td>	
			</tr>
			<?php endforeach; ?>
		
		</table>
	</div>
 <?php require 'pages/footer.php';?> 