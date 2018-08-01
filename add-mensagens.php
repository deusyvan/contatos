<?php  require 'pages/header.php'; ?>
<?php 
if(empty($_SESSION['cLogin'])) {
    ?>
    <script type="text/javascript">window.location.href="login.php";</script>
    <?php 
    exit;
}
?>
<div class="container">
	<h1>Minhas Mensagens - Adicionar Mensagem</h1>
	<form method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="categoria">Categoria: </label>
			<select name="categoria" id="categoria" class="form-control">
				<?php 
				require 'classes/categorias.class.php';
				$c = new Categorias();
				$cats = $c->getLista();
				foreach ($cats as $cat):
				?>
				<option value="<?php echo $cat['id'];?>"><?php echo $cat['nome_categoria']; ?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group">
			<label for="titulo">Título: </label>
			<input type="text" name="titulo" id="titulo" class="form-control" />
		</div>
		<div class="form-group">
			<label for="descricao">Descrição: </label>
			<textarea name="descricao" id="descricao" class="form-control" ></textarea>
		</div>
		<div class="form-group">
			<label for="status">Status: </label>
			<select name="status" id="status" class="form-control">
				<?php 
				require 'classes/status.class.php';
				$s = new Status();
				$status = $s->getLista();
				foreach ($status as $state):
				?>
				<option value="<?php echo $state['id'];?>"><?php echo $state['nome_status']; ?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group">
			<label for="data_envio">Data envio: </label>
			<input type="text" name="data_envio" id="data_envio" class="form-control" />
		</div>

		<input type="submit" value="Adicionar" class="btn btn-default">
	</form>
</div>
 <?php require 'pages/footer.php'; ?>