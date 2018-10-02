<?php
/***********************************************************************************************************
* local/script name: ./views/contatosOnLine.php                                                                   *
* Criado por: 2º Sgt Deusyvan deusyvan@gmail.com / contato@dfsweb.com.br                                   *
* **********************************************************************************************************/
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<div class="breadcrumb-holder">
					<h1 class="main-title float-left">Todos os Contatos</h1>
					<ol class="breadcrumb float-right">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item">Cadastro</li>
						<li class="breadcrumb-item active">Contatos em Geral</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div><!-- end row -->
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-12 col-xl-12">						
    		<div class="card mb-1">
    			<div class="card-header">
    				<h3><i class="fa fa-table"></i> Lista Geral dos Contatos</h3>
    					Abaixo lista de <i>Contatos</i> do sistema.
    			</div>
    				
    			<div class="card-body">
					<a href="adiciona.php" class="btn btn-success">Adicionar Contato</a>
    				<a href="importar.php" class="btn btn-primary">Importar Contatos</a>
    				<table class="table table-responsive-xl">
    				  <thead>
    					<tr>
    					  <th scope="col">Nome do Contato</th>
    					  <th scope="col">Status</th>
    					  <th scope="col">Ações</th>
    					</tr>
    				  </thead>
    				  <?php foreach($lista as $contato): ?>
        				  <tbody>
        					<tr>
        					  <th scope="row"><?php echo $contato['nome']; ?></th>
        					  <td><?php echo $contato['status']; ?></td>
        					  <td>
            					<a href="editar-contato.php?id=<?php echo $contato['id']; ?>" class="btn btn-success">Editar</a>
            					<a href="excluir-contato.php?id=<?php echo $contato['id']; ?>" class="btn btn-danger">Excluir</a>
                			  </td>
        					</tr>
        				  </tbody>
    				  <?php endforeach; ?>
    				</table>
    			</div>							
    		</div><!-- end card-->					
    	</div>				
    </div>
    <!-- END container-fluid -->