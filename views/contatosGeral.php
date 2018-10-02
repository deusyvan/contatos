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
                				  <h4 class="alert-heading">Documento salvo com sucesso</h4>
                				  <p>Seu documento foi salvo, se desejar consultar ou alterá-lo por favor <a target="_blank" href="#">clique aqui.</a></p>
                			</div>
                			<form method="POST" name="formDoc">
                			<div class="row" data-parsley-validate novalidate>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">						
                					<div class="card mb-3">
                						<div class="card-header">
                							<h3><i class="fa fa-hand-pointer-o"></i> Formulário de Cadastro de Documento</h3>
                							Atenção a Unidade/OM refere-se à origem do documento.
                						</div>
                						<div class="card-body">
                                            <div class="row">
                                            	<div class="form-group col-md-4 col-lg-4 col-xl-4">
                                                    <label for="tipoDocumento">Tipo de Documento<span class="text-danger">*</span></label>
                                                    <select class="form-control select2" name="tipoDocumento" required  id="tipoDocumento"> 
                                					  <option value=""></option>
                                					  <?php foreach ($tiposDocumento as $tipoDoc):?>
                                						<option value="<?php echo $tipoDoc['id']?>">
                                							<?php echo $tipoDoc['sigla'];?>
                                						</option>
                                					  <?php endforeach;?>
                                					</select>
                                                </div>
                                                <div class="form-group col-md-4 col-lg-4 col-xl-4">
                                                    <label for="numero">Número do Documento<span class="text-danger">*</span></label>
                                                    <input type="text" name="nr" data-parsley-type="number" 
                                                    	required placeholder="Digite apenas números" class="form-control" id="numero">
                                                </div>
                                                <div class="form-group col-md-4 col-lg-4 col-xl-4">
                                                	<label for="dataDoc">Data Documento<span class="text-danger">*</span></label>
                                    				<input type="text" id="dataDoc" name="dataDoc" required placeholder="Informe uma data" 
                                    					class="form-control"/>
                                    			</div><!-- end card-->
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-9 col-lg-6 col-xl-6">
                                                    <label for="armario">Armário<span class="text-danger">*</span></label>
                    								<select class="form-control" name="armarioDoc" required  id="armario">
                    									<option value="">Selecione o Armário</option>
                    									<option value="1">Armário 1</option>
                    									<option value="2">Armário 2</option>
                    									<option value="3">Armário 3</option>
                    									<option value="4">Armário 4</option>
                    									<option value="5">Armário 5</option>
                    									<option value="6">Armário 6</option>
                    								</select>
                                        		</div>
                                        		<div class="form-group col-md-9 col-lg-6 col-xl-6">
                                                    <label for="prateleira">Prateleira<span class="text-danger">*</span></label>
                    								<select class="form-control" name="prateleiraDoc" required id="prateleira" >
                    									<option value="">Selecione a Prateleira</option>
                    									<option value="1">Prateleira 1</option>
                    									<option value="2">Prateleira 2</option>
                    									<option value="3">Prateleira 3</option>
                    									<option value="4">Prateleira 4</option>
                    									<option value="5">Prateleira 5</option>
                    									<option value="6">Prateleira 6</option>
                    									<option value="7">Prateleira 7</option>
                    									<option value="8">Prateleira 8</option>
                    									<option value="9">Prateleira 9</option>
                    									<option value="10">Prateleira 10</option>
                    									<option value="11">Prateleira 11</option>
                    									<option value="12">Prateleira 12</option>
                    									<option value="13">Prateleira 13</option>
                    									<option value="14">Prateleira 14</option>
                    									<option value="15">Prateleira 15</option>
                    									<option value="16">Prateleira 16</option>
                    									<option value="17">Prateleira 17</option>
                    									<option value="18">Prateleira 18</option>
                    								</select>
                                        		</div><!-- end card-->
                                        	</div>
                                        	<div class="row">
                                            	<div class="form-group col-md-4 col-lg-4 col-xl-4">
                                                    <label for="origem">Origem<span class="text-danger">*</span></label>
                                                    <select class="form-control" name="origem" required  id="origem"> 
                                					  <option value=""></option>
                                					  <?php foreach ($listaOm as $origem):?>
                                						<option value="<?php echo utf8_encode($origem['sigla']); ?>">
                                							<?php echo utf8_encode($origem['sigla']);?>
                                						</option>
                                					  <?php endforeach;?>
                                					</select>
                                                </div>
                                                <div class="form-group col-md-4 col-lg-4 col-xl-6">
                                                	<label for="quantidadeProcesso">Quantidade de Processos encaminhados:<span class="text-danger">*</span></label>
                                    				<input type="text" data-parsley-type="number"  id="quantidadeProcesso" name="quantidadeProcesso" required placeholder="Total de Processos do Documento" 
                                    					class="form-control"/>
                                    			</div><!-- end card-->
                                             </div>
                                            <div class="form-group text-right m-b-0">
                                                <button class="btn btn-primary" type="submit">Inserir Documento</button>
                                                <button type="button" class="btn btn-secondary m-l-5" data-dismiss="modal">Sair</button>
                                            </div>
                						</div>														
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