<?php  require 'pages/header.php'; ?>
<?php 
if(empty($_SESSION['cLogin'])) {
    ?>
    <script type="text/javascript">window.location.href="login.php";</script>
    <?php 
    exit;
}

require 'classes/contatos.class.php';
$c = new Contatos();
if (isset($_POST['nome']) && !empty($_POST['nome'])){
    $grupo = addslashes($_POST['grupo']);
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $residencial = addslashes($_POST['residencial']);
    $endereco = addslashes($_POST['endereco']);
    $status = addslashes($_POST['status']);
    $sexo = addslashes($_POST['sexo']);
    $email2 = addslashes($_POST['email2']);
    $ddd = addslashes($_POST['ddd']);
    $fone = addslashes($_POST['fone']);
    $id_graduacao = addslashes($_POST['posto_graduacao']);
    $id_om = addslashes($_POST['om']);
    $id_cidade = addslashes($_POST['cidade']);
    
    $c->editContato($grupo, $nome, $email, $celular, $residencial, $endereco, $status, 
        $sexo, $email2, $ddd, $fone, $id_graduacao, $id_om, $id_cidade, $_GET['id']);
    ?>
   <div class="alert alert-success">Contato alterado com sucesso!</div>
   <?php 
}

if (isset($_GET['id']) && !empty($_GET['id'])){
    $info = $c->getContato($_GET['id']);
} else {
    ?>
    <script type="text/javascript">window.location.href="meus-contatos.php";</script>
    <?php 
    exit;
}
?>
<div class="container">
	<h1>Meus Contatos - Editar Contato</h1>
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
				<option value="<?php echo $grupo['id'];?>"
				    <?php echo ($info['id_grupo'] == $grupo['id'])?'selected="selected"':'';?>
				><?php echo $grupo['nome_grupo']; ?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group">
			<label for="nome">Nome: </label>
			<input type="text" name="nome" id="nome" class="form-control" value="<?php echo $info['nome']; ?>"/>
		</div>
		<div class="form-group">
			<label for="email">E-mail: </label>
			<input type="text" name="email" id="email" class="form-control" value="<?php echo $info['email1']; ?>"/>
		</div>
		<div class="form-group">
			<label for="email2">2º E-mail: </label>
			<input type="text" name="email2" id="email2" class="form-control" value="<?php echo $info['email2']; ?>"/>
		</div>
		<div class="form-group">
			<label for="ddd">DDD: </label>
			<input type="text" name="ddd" id="ddd" class="form-control" value="<?php echo $info['ddd']; ?>"/>
		</div>
		<div class="form-group">
			<label for="celular">Celular: </label>
			<input type="text" name="celular" id="celular" class="form-control" value="<?php echo $info['celular']; ?>"/>
		</div>
		<div class="form-group">
			<label for="residencial">Telefone Residencial: </label>
			<input type="text" name="residencial" id="residencial" class="form-control" value="<?php echo $info['residencial']; ?>"/>
		</div>
		<div class="form-group">
			<label for="fone">Outro Telefone: </label>
			<input type="text" name="fone" id="fone" class="form-control" value="<?php echo $info['outro_fone']; ?>"/>
		</div>
		<div class="form-group">
			<label for="genero">Sexo: </label>
			<select name="genero" id="genero" class="form-control">
				<option></option>
				<option value="0" <?php echo ($info['sexo'] == '0')?'selected="selected"': '';?>>Feminino</option>
				<option value="1" <?php echo ($info['sexo'] == '1')?'selected="selected"': '';?>>Masculino</option>
			</select>
		</div>
		<div class="form-group">
			<label for="graduacao">Posto/Graduação: </label>
			<input type="text" name="graduacao" id="graduacao" class="form-control" value="<?php echo $info['id_graduacao']; ?>"/>
		</div>
		<div class="form-group">
			<label for="om">Organização Militar: </label>
			<input type="text" name="om" id="om" class="form-control" value="<?php echo $info['id_om']; ?>"/>
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
				<option value="<?php echo $state['id'];?>"
				    <?php echo ($info['id_status'] == $state['id'])?'selected="selected"':'';?>
				><?php echo $state['nome_status']; ?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group">
			<label for="endereco">Endereço: </label>
			<textarea name="endereco" id="endereco" class="form-control" ><?php echo $info['endereco']; ?></textarea>
		</div>
		<div class="form-group">
			<label for="cidade">Cidade: </label>
			<input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $info['id_cidade']; ?>"/>
		</div>
		
		<input type="submit" value="Salvar" class="btn btn-default">
	</form>
</div>
 <?php require 'pages/footer.php'; ?>