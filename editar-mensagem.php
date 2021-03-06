
<?php  require 'pages/header.php'; ?>
<?php 
if(empty($_SESSION['cLogin'])) {
    ?>
    <script type="text/javascript">window.location.href="login.php";</script>
    <?php 
    exit;
}

require 'classes/mensagens.class.php';
$m = new Mensagens();
if (isset($_POST['titulo']) && !empty($_POST['titulo'])){
   $titulo = addslashes($_POST['titulo']);
   $categoria = addslashes($_POST['categoria']);
   $descricao = addslashes($_POST['descricao']);
   $status = addslashes($_POST['status']);
   
   if (isset($_FILES['fotos'])){
       $fotos = $_FILES['fotos'];
   } else {
       $fotos = array();
   }
   
   $m->editMsg($titulo, $categoria, $descricao, $status, $fotos, $_GET['id']);
   ?>
   <div class="alert alert-success">Mensagem Alterada com sucesso!</div>
   <?php 
}
if (isset($_GET['id']) && !empty($_GET['id'])){
    $info = $m->getMensagem($_GET['id']);
} else {
    ?>
    <script type="text/javascript">window.location.href="minhas-mensagens.php";</script>
    <?php 
    exit;
}

?>
<div class="container">
	<h1>Mensagens - Editar Mensagem</h1>
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
				<option value="<?php echo $cat['id']; ?>" 
				    <?php echo ($info['id_categoria'] == $cat['id'])?'selected="selected"':'';?>
				><?php echo $cat['nome_categoria']; ?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group">
			<label for="titulo">Título: </label>
			<input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $info['titulo']; ?>"/>
		</div>
		<div class="form-group">
			<label for="descricao">Descrição: </label>
			<textarea name="descricao" id="descricao" class="form-control" ><?php echo $info['descricao']; ?></textarea>
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
		
		<div class="form-group">
			<label for="add_foto">Imagens/Fotos:</label>
			<input type="file" name="fotos[]" multiple /><br/>
			
			<div class="panel panel-default">
				<div class="panel-heading">Imagens e Fotos para a Mensagem</div>
				<div class="panel-body">
					<!-- Percorrer o array para criar as diversas div com suas fotos e botao de excluir -->
					<?php foreach ($info['fotos'] as $foto):?>
						<div class="foto_item">
							<img src="assets/images/mensagens/<?php echo $foto['url']; ?>" class="img-thumbnail" border="0" /><br/>
							<a href="excluir-foto.php?id=<?php echo $foto['id']; ?>" class="btn btn-default">Excluir Imagem</a>
						</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
		
		<input type="submit" value="Salvar" class="btn btn-default">
	</form>
</div>
 <?php require 'pages/footer.php'; ?>