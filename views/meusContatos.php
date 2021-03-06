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
					<h1 class="main-title float-left">Meus Contatos</h1>
					<ol class="breadcrumb float-right">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item">Cadastro</li>
						<li class="breadcrumb-item active">Meus Contatos</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div><!-- end row -->
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-12 col-xl-12">						
    		<div class="card mb-1">
    			<div class="card-header">
    				<h3><i class="fa fa-table"></i> Lista completa de meus Contatos</h3>
    					Abaixo lista de <i>Contatos</i> alterados por <?php echo $_SESSION['cNome']; ?>.
    			</div>
    				
    			<div class="card-body">
    				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    	<div>
                    		<a role="button" href="" 
                    			class="btn btn-success fa fa-plus-square bigfonts" data-toggle="modal" data-target=".bd-contato-modal-lg">
                    			Adicionar Contato
                    		</a>
                    	</div>
                    </div>
    				<table class="table table-responsive-xl">
    				  <thead>
    					<tr>
    					  <th scope="col">Nome do Contato</th>
    					  <th scope="col">Endereço</th>
    					  <th scope="col">E-mail</th>
    					  <th scope="col">Celular</th>
    					  <th scope="col">Status</th>
    					  <th scope="col">Ações</th>
    					</tr>
    				  </thead>
    				  <?php foreach($lista as $contato): ?>
        				  <tbody>
        					<tr>
        					  <th scope="row"><?php echo $contato['nome']; ?></th>
        					  <td><?php echo $contato['endereco']; ?></td>
        					  <td><?php echo $contato['email1']; ?></td>
        					  <td><?php echo $contato['celular']; ?></td>
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
    			<!-- Large modal -->
                <div class="modal fade bd-contato-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                	<div class="modal-content">
                		<div class="modal-header">
                			<h5 class="modal-title">Novo Contato</h5>
                			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                		</div>
                		<div class="modal-body">
                			<div class="alert alert-success" role="alert" hidden="true">
                				  <h4 class="alert-heading">Contato salvo com sucesso</h4>
                				  <p>Seu contato foi salvo, se desejar consultar ou alterá-lo por favor <a target="_blank" href="#">clique aqui.</a></p>
                			</div>
                			<form method="POST" name="formCont">
                			<div class="row" data-parsley-validate novalidate>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">						
                					<div class="card mb-3">
                						<div class="card-header">
                							<h3><i class="fa fa-hand-pointer-o"></i>Cadastro de Novo Contato</h3>
                						</div>
                						<div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-md-4 col-lg-6 col-xl-12">
                                                    <label for="nome">Nome: <span class="text-danger">*</span></label>
                                                    <input type="text" name="nome" data-parsley-type="text" 
                                                    	required placeholder="Digite nome completo" class="form-control" id="nome">
                                                </div>
                                            </div>
                                            <div class="row">
                                            	<div class="form-group col-md-5 col-lg-5 col-xl-5">
                                                    <label for="email">E-mail: <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" placeholder="Digite o e-mail" class="form-control" id="email">
                                                </div>
                                                <div class="form-group col-md-5 col-lg-5 col-xl-5">
                                                    <label for="celular">Celular: <span class="text-danger">*</span></label>
                                                    <input type="text" name="celular" placeholder="Digite celular" class="form-control" id="celular">
                                                </div>
                                            </div>
                                            <div class="row">
                                            	<div class="form-group col-md-5 col-lg-5 col-xl-5">
                                                    <label for="residencia">Telefone Residêncial: <span class="text-danger">*</span></label>
                                                    <input type="text" name="residencia" placeholder="Digite o telefone da residência" class="form-control" id="residencia">
                                                </div>
                                                <div class="form-group col-md-7 col-lg-7 col-xl-7">
                                                    <label for="endereco">Endereço: <span class="text-danger">*</span></label>
                                                    <input type="text" name="endereco" placeholder="Digite o endereço do contato" class="form-control" id="endereco">
                                                </div>
                                            </div>
                                        	<div class="row">
                                            	<div class="form-group col-md-5 col-lg-5 col-xl-5">
                                                    <label for="grupo">Grupo: <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="grupo" required  id="grupo"> 
                                					  <option value=""></option>
                                					  <?php foreach ($grupos as $grupo):?>
                                						<option value="<?php echo $grupo['id']?>">
                                							<?php echo $grupo['nome_grupo'];?>
                                						</option>
                                					  <?php endforeach;?>
                                					</select>
                                                </div>
                                                <div class="form-group col-md-5 col-lg-5 col-xl-5">
                                                    <label for="status">Status: <span class="text-danger">*</span></label>
                                                    <input id="status" type="hidden" name="status" value="13"></input>
                                                    <select class="form-control" name="v_status" id="v_status" disabled="disabled"> 
                                					  <option value="13" selected="selected">Cadastro On-Line</option>
                                					</select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group text-right m-b-0">
                                                <button class="btn btn-primary" type="submit">Inserir Contato</button>
                                                <button type="button" class="btn btn-secondary m-l-5" data-dismiss="modal">Sair</button>
                                            </div>
                						</div><!-- end card body-->														
                					</div><!-- end card-->					
                				</div>
                			</div>
                		</form><!-- end Form modal-->
                		</div><!-- end modal body-->
                	</div><!-- end modal-content -->
                  </div><!-- end modal-dialog -->
                </div><!-- end large modal -->
                
    		</div><!-- end card-->					
    	</div>				
    </div>
    <!-- END container-fluid -->