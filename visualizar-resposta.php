<?php  require 'pages/header.php'; ?>
<?php 
if(empty($_SESSION['cLogin'])) {
    ?>
    <script type="text/javascript">window.location.href="login.php";</script>
    <?php 
    exit;
}

require 'classes/respostas.class.php';
require 'classes/contatos.class.php';
$r = new Respostas();
$c = new Contatos();

if (isset($_POST['lista']) && !empty($_POST['lista'])){
   $lista = addslashes($_POST['lista']);
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
		<div class="form-group">
			<label for="lista">Lista: </label>
			<textarea name="lista" id="lista" class="form-control" disabled="disabled"><?php echo $info['lista_contatos_id']; ?></textarea>
		</div>
	<div class="container">
    		<h1>Relação</h1>
    		<table class="table table-striped">
    			<thead>
    				<tr>
    					<th>Número</th>
    					<th>Nome</th>
    					<th>DDD</th>
    					<th>Celular</th>
    				</tr>
    			</thead>
    			<?php 
    			$contatos = $c->getContatos($info['lista_contatos_id']);
    			foreach ($contatos as $contato):			
    			?>
    			<tr>
    				<td><?php echo $contato['id']; ?></td>
    				<td><?php echo $contato['nome']; ?></td>
    				<td><?php echo $contato['ddd']; ?></td>
    				<td><?php echo $contato['celular']; ?></td>	
    			</tr>
    			<?php endforeach; ?>
    		
    		</table>
	</div>
</div>
 <?php require 'pages/footer.php'; ?>