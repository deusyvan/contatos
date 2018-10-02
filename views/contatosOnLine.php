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
					<h1 class="main-title float-left">Contatos ON-LINE</h1>
					<ol class="breadcrumb float-right">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item">Tabelas de Contatos</li>
						<li class="breadcrumb-item active">On Line</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div><!-- end row -->
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-12 col-xl-12">						
    		<div class="card mb-1">
    			<div class="card-header">
    				<h3><i class="fa fa-table"></i> Contatos On-Line</h3>
    					Abaixo lista de <i>Contatos</i> que foram inseridos ON-LINE e atualizado pelo usuário.
    			</div>
    				
    			<div class="card-body">
    				<table class="table table-responsive-xl">
    				  <thead>
    					<tr>
    					  <th scope="col">Nome do Contato</th>
    					  <th scope="col">Celular</th>
    					  <th scope="col">Usuário Cadastrador</th>
    					</tr>
    				  </thead>
    				  <?php foreach($listaContatosOnLine as $contatoOnLine): ?>
        				  <tbody>
        					<tr>
        					  <th scope="row"><?php echo $contatoOnLine['nome']; ?></th>
        					  <td><?php echo $contatoOnLine['celular']; ?></td>
        					  <td><?php echo $contatoOnLine['usuario']; ?></td>
        					</tr>
        				  </tbody>
    				  <?php endforeach; ?>
    				</table>
    			</div>							
    		</div><!-- end card-->					
    	</div>				
    </div>
    <!-- END container-fluid -->