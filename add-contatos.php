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
	<h1>Meus Contatos - Adicionar Contato</h1>
	<form method="POST" >
		<div class="form-group">
			<label for="grupo">Grupo: </label>
			<select name="grupo" id="grupo" class="form-control">
				<?php 
				require 'classes/grupos.class.php';
				$g = new Grupos();
				$grupos = $g->getLista();
				foreach ($grupos as $grupo):
				?>
				<option value="<?php echo $grupo['id'];?>"><?php echo $grupo['nome_grupo']; ?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group">
			<label for="nome">Nome: </label>
			<input type="text" name="nome" id="nome" class="form-control" />
		</div>
		<div class="form-group">
			<label for="email">E-mail: </label>
			<input type="text" name="email" id="email" class="form-control" />
		</div>
		<div class="form-group">
			<label for="celular">Celular: </label>
			<input type="text" name="celular" id="celular" class="form-control" />
		</div>
		<div class="form-group">
			<label for="residencial">Residencial: </label>
			<input type="text" name="residencial" id="residencial" class="form-control" />
		</div>
		
		<div class="form-group">
			<label for="endereco">Endereço: </label>
			<textarea name="endereco" id="endereco" class="form-control" ></textarea>
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
		
		
		<input type="submit" value="Adicionar" class="btn btn-default">
	</form>
</div>
 <?php require 'pages/footer.php'; ?>