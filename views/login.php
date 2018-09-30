<?php
/***********************************************************************************************************
* local/script name: ./views/login.php                                                                      *
* Criado por: Deusyvan deusyvan@gmail.com / contato@dfsweb.com.br                                   *
* Inclui arquivo de login do sistema                                                               *
* **********************************************************************************************************/
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<div class="breadcrumb-holder">
					<h1 class="main-title float-left">Login</h1>
					<ol class="breadcrumb float-right">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item active">Login</li>
					</ol>
					<div class="clearfix"></div>
				</div>
			</div>
		</div><!-- end row -->
		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">						
					<div class="card mb-3">						
						<div class="card-body">
							<form class="demo-form" action="#" method="POST">
							  <div class="form-section">
								<label for="email">E-mail:</label>
								<input type="text" class="form-control" name="email" id="email" required>

								<label for="senha">Senha:</label>
								<input type="password" class="form-control" name="senha" id="senha" required>
							  </div>
							  <br /><br />
							  <div class="form-navigation">
								<input type="submit" class="btn btn-primary pull-right" value="Fazer Login">
								<span class="clearfix"></span>
							  </div>
							</form>
						</div>														
					</div><!-- end card-->					
                </div>
		</div><!-- end row -->
    </div><!-- END container-fluid -->