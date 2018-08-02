<?php  require 'pages/header.php'; ?>
<?php 
if(empty($_SESSION['cLogin'])) {
    ?>
    <script type="text/javascript">window.location.href="login.php";</script>
    <?php 
    exit;
}

require 'classes/respostas.class.php';
$r = new Respostas();
if (isset($_POST['lista']) && !empty($_POST['lista'])){
   $mensagem = addslashes($_POST['mensagem']);
   $lista = addslashes($_POST['lista']);
   $status = 7;
   
   $r->addResp($mensagem, $lista, $status);
   ?>
   <div class="alert alert-success">Resposta adicionada com sucesso!</div>
   <?php 
}
?>
<div class="container">
	<h1>Respostas - Adicionar Resposta</h1>
	<form method="POST" >
		<div class="form-group">
			<label for="mensagem">Nº da Mensagem que será (foi) enviada: </label>
			<select name="mensagem" id="mensagem" class="form-control">
				<?php 
				require 'classes/mensagens.class.php';
				$m = new Mensagens();
				$msgs = $m->getMensagens();
				foreach ($msgs as $msg):
				?>
				<option value="<?php echo $msg['id'];?>"><?php echo $msg['id']." - ".$msg['titulo']; ?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group">
			<label for="lista">Lista de Contatos: </label>
			<textarea name="lista" id="lista" class="form-control" ></textarea>
		</div>
		<div class="form-group">
			<label for="status">Status: </label>
			<select name="status" id="status" class="form-control" disabled="disabled">
				<option value="7" selected="selected">Pendente</option>
			</select>
		</div>
		<div class="form-group">
			<label for="data_envio">Data envio: </label>
			<input type="text" name="data_envio" id="data_envio" class="form-control" disabled="disabled" />
		</div>
		<input type="submit" value="Adicionar" class="btn btn-default">
	</form>
</div>
 <?php require 'pages/footer.php'; ?>