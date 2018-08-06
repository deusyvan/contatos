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
   $status = addslashes($_POST['status']); 
   
   $r->editResp($mensagem, $lista, $status, $_GET['id']);
   ?>
   <div class="alert alert-success">Resposta alterada com sucesso!</div>
   <?php 
}

if (isset($_GET['id']) && !empty($_GET['id'])){
    $info = $r->getResposta($_GET['id']);
} else {
    ?>
    <script type="text/javascript">window.location.href="minhas-respostas.php";</script>
    <?php 
    exit;
}
?>
<div class="container">
	<h1>Respostas - Editar Resposta</h1>
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
				<option value="<?php echo $msg['id'];?>"
				<?php echo ($info['id_mensagem'] == $msg['id'])?'selected="selected"':'';?>
				><?php echo $msg['id']." - ".$msg['titulo']; ?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group">
			<label for="lista">Lista de Contatos: </label>
			<textarea name="lista" id="lista" class="form-control" ><?php echo $info['lista_contatos_id']; ?></textarea>
		</div>
		<div class="form-group">
			<label for="status">Status: </label>
			<select name="status" id="status" class="form-control" >
				<?php 
				require 'classes/status.class.php';
				$s = new Status();
				$status = $s->getLista();
				foreach ($status as $state):
				?>
				<option value="<?php echo $state['id'];?>"
				    <?php echo ($info['id_status'] == $state['id'])?'selected="selected"':'';?>
				><?php echo $state['nome_status']; ?></option>
				<?php endforeach;?>
			</select>
		</div>
		
		<input type="submit" value="Salvar" class="btn btn-default">
	</form>
</div>
 <?php require 'pages/footer.php'; ?>